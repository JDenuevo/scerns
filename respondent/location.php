<?php 
include '../conn.php';
session_start();
if(isset($_GET['id'])) {
  // Retrieve the value of the 'id' parameter
  $id = $_GET['id'];
}

if(isset($_GET['type'])) {
  // Retrieve the value of the 'id' parameter
  $type = $_GET['type'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SCERNS | Location</title>
  <link rel="icon" href="../assets/img/orig-logo.png">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Open+Sans:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <!-- Main Template -->
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>

<style>

.breadcrumb-item {
  position: relative;
  z-index: 1; /* Ensure breadcrumb items are on top of the pseudo-element */
}

.breadcrumb-item:not(:last-child)::after {
  content: url('../assets/img/lines.svg'); /* Replace with the correct path to your SVG file */
  position: absolute;
  top: 30%;
  right: -40px; /* Adjust the spacing as needed */
  transform: translateY(-50%);
}

</style>
<body>

  <div class="text-center other-cont">
    <!-- TOP NAVBAR -->
    <?php include '../respondent/components/navbar-top.php'; ?>
    <h2>LOCATION</h2>
  </div>

  <br>

    <?php
      $sql = "SELECT * FROM scerns_status WHERE id = '$id'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      
      $movement = $row['movement'];

      if ($row === null) {
          // No rows found, so the respondent name does not exist in scerns_status
          $respondentNameExistsInScernsStatus = true;
      } else {
          $respondentNameExistsInScernsStatus = false;
      }

      if ($row['movement'] == '' || $row['movement'] === null){
        $showStatus = false;
      }else{
        $showStatus = true;
      }
    ?>

    <div class="container">

      <div class="d-flex justify-content-between align-items-center">

        <a href="./home.php"><i class="fa-solid fa-arrow-left fa-2xl text-secondary"></i></a>
        <br><br>
        <?php
        if ($showStatus) {
            echo '<select class="form-select border border-secondary w-50" name="emergency_status" id="emergency_status" onchange="updateStatus(\'' . $row['id'] . '\', this.value)">
                    <option selected>Select Status</option>
                    <option value="In need for backup" ' . ($row['emergency_status'] == 'In need for backup' ? 'selected' : '') . '>In need for backup</option>
                    <option value="Situation Under Control" ' . ($row['emergency_status'] == 'Situation Under Control' ? 'selected' : '') . '>Situation Under Control</option>
                    <option value="Unsuccessfully Operated" ' . ($row['emergency_status'] == 'Unsuccessfully Operated' ? 'selected' : '') . '>Unsuccessfully Operated</option>
                    <option value="Successfully Operated" ' . ($row['emergency_status'] == 'Successfully Operated' ? 'selected' : '') . '>Successfully Operated</option>
                  </select>';
        }
        ?>
        <script>
        function updateStatus(ID, emergency_status) {
            $.ajax({
                type: "POST",
                url: "../php/update_status.php",
                data: { id: ID, emergency_status: emergency_status },
                success: function (response) {
                    // Log the response to the console for debugging
                    console.log("Server response:", response);

                    // Assuming the server returns the updated emergency_status
                    // You may need to adjust this part based on your server response
                    $("emergency_status").val(response);
                },
                error: function (error) {
                    console.error("Error updating status:", error);
                }
            });
        }
        </script>

      </div>

      <?php
        $sql = "SELECT address FROM scerns_reports WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        $address = $row['address'];

        // Set a user agent
        ini_set('user_agent', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3');

        // Use Nominatim to get coordinates
        $nom_url = "https://nominatim.openstreetmap.org/search?format=json&q=" . urlencode($address);
        $nom_response = file_get_contents($nom_url);

        if ($nom_response !== false) {
            $nom_data = json_decode($nom_response);

            // Check if coordinates are available
            if (!empty($nom_data) && isset($nom_data[0]->lat) && isset($nom_data[0]->lon)) {
                $lat = $nom_data[0]->lat;
                $lon = $nom_data[0]->lon;
                // Output coordinates for debugging

                echo "Latitude: $lat, Longitude: $lon";
                // Output the map with a marker
      ?>

      <div id="map" style="height: 300px;"></div>

      <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
      <script>
        var map = L.map('map').setView([<?php echo $lat; ?>, <?php echo $lon; ?>], 15);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        L.marker([<?php echo $lat; ?>, <?php echo $lon; ?>]).addTo(map)
          .bindPopup('<?php echo $address; ?>')
          .openPopup();
      </script>
      <?php
            } else {
                echo "Unable to retrieve coordinates for the given address.";
                // Output Nominatim response for debugging
                var_dump($nom_data);
            }
        } else {
            echo "Failed to retrieve data from Nominatim.";
        }
      ?>

      <?php
        $sql = "SELECT * FROM scerns_respondents WHERE id = 1";
        $results = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($results);

        // Check if the image is null or empty
        if ($row['prof_img'] == null || empty($row['prof_img'])) {
            // Set default image path if img is null or empty
            $src = "../assets/img/default.jpg";
        } else {
            // Use the image from the database
            $imageData = base64_encode($row['prof_img']);

            // Determine the image MIME type based on the content
            $imageInfo = getimagesizefromstring(base64_decode($imageData));
            $mime_type = $imageInfo['mime'];

            // Construct the src attribute dynamically
            $src = "data:{$mime_type};base64,{$imageData}";
        }
      ?>
      
      <?php
        if ($respondentNameExistsInScernsStatus) {
            echo '<div class="text-center my-4">
                    <input type="hidden" name="id" id="id" value="' . $id . '"/>
                    <input type="hidden" name="respondent_name" id="respondent_name" value="' . $row['name'] . '"/>
                    <button class="btn btn-secondary rounded-4 border shadow p-2 w-50 fw-semibold mx-2" onclick="respond()">RESPOND</button>
                  </div>';
        } 
      ?>

      <script>
        function respond() {
          var id = document.getElementById('id').value;
          var respondent_name = document.getElementById('respondent_name').value;

          $.ajax({
              type: "POST",
              url: "../php/update_respond.php",
              data: JSON.stringify({ id: id, respondent_name: respondent_name, movement: "Move" }),
              contentType: 'application/json',
              success: function(response) {
                  // Handle the success response if needed
                  console.log("Data inserted successfully");
                  
                  // Reload the page after successful insertion
                  location.reload();
              },
              error: function(error) {
                  console.error("Error inserting data:", error);
              }
          });
        }
      </script>


      <hr style="color: #000; border-width: 3px;">
    
      <div class="card">
        <div class="card-body text-center">
          <label class="fw-semibold fs-4">Responder's Info</label>
          <div class="d-flex align-items-stretch">
            <div class="d-flex flex-row px-3 align-items-center my-2">
              <div class="rounded-circle bg-secondary d-flex align-items-center justify-content-center" style="height: 80px; width: 80px;">
                <img src="<?php echo $src; ?>" style="height: 80px; width: 80px;" class="img-fluid rounded-circle">
              </div>
            </div>
            <div class="text-start my-auto">
              <h4><?php echo $row['name']; ?></h4>
              <label><?php echo $row['contact_number']; ?></label>
            </div>
          </div>
       
          <hr>
          
          <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '';">
            <ol class="breadcrumb d-flex justify-content-around">
              <li class="breadcrumb-item">
                <div class="d-flex flex-column align-items-center my-2">
                  <button class="btn btn-secondary rounded-circle border border-5 border-secondary d-flex align-items-center justify-content-center active" style="height: 60px; width: 60px;">
                    <i class="fa-solid fa-truck-medical fa-xl text-light"></i>
                  </button>
                  <div class="text-center mt-2">Move</div>
                </div>
              </li>
              <li class="breadcrumb-item">
                <div class="d-flex flex-column align-items-center my-2">
                  <button class="btn btn-secondary rounded-circle border border-5 border-secondary d-flex align-items-center justify-content-center" style="height: 60px; width: 60px;" disabled>
                    <i class="fa-solid fa-shuffle fa-xl text-light"></i>
                  </button>
                  <div class="text-center mt-2">Enroute</div>
                </div>
              </li>
              <li class="breadcrumb-item">
                <div class="d-flex flex-column align-items-center my-2">
                  <button class="btn btn-secondary rounded-circle border border-5 border-secondary d-flex align-items-center justify-content-center" style="height: 60px; width: 60px;" disabled>
                    <i class="fa-solid fa-helicopter-symbol fa-xl text-light"></i>
                  </button>
                  <div class="text-center mt-2">Arrived</div>
                </div>
              </li>
            </ol>
          </nav>

          <script>
          $(document).ready(function() {
              // Replace 'your_php_variable' with the actual PHP variable that holds the movement value
              var movement = '<?php echo $movement; ?>';

              // Remove 'active' class from all buttons
              $('.breadcrumb-item button').removeClass('active');

              // Add 'active' class to the corresponding button
              if (movement === 'Move') {
                  $('#moveBtn').addClass('active');
              } else if (movement === 'Enroute') {
                  $('#enrouteBtn').addClass('active');
              } else if (movement === 'Arrived') {
                  $('#arrivedBtn').addClass('active');
              }
          });
          </script>

          <script>
            $(document).ready(function() {
                var id = '<?php echo $id; ?>';

                // Function to update movement using Ajax
                function updateMovement(movement) {
                    $.ajax({
                        type: 'POST',
                        url: '../php/update_movement.php', // Replace with your actual endpoint
                        data: { id: id, movement: movement }, // Include the id in the data
                        success: function(response) {
                            console.log(response); // Log the server response (you can handle it as needed)
                        },
                        error: function(error) {
                            console.error('Error updating movement:', error);
                        }
                    });
                }

                // Event handler for the "Enroute" button
                $('#enrouteBtn').click(function() {
                    updateMovement('Enroute');
                    location.reload();
                });

                // Event handler for the "Arrived" button
                $('#arrivedBtn').click(function() {
                    updateMovement('Arrived');
                    location.reload();
                });
            });
          </script>

        </div>
      </div>


    </div>

  <br> <br> <br> <br>

  <!-- BOTTOM NAVBAR -->
  <?php include '../respondent/components/navbar-bottom.php'; ?>

  <?php include '../respondent/components/notif-modal.php'; ?>

  <script src="../assets/js/bootstrap.bundle.js"></script>
  <script src="../assets/js/jquery-3.7.1.min.js"></script>
  <script src="../assets/js/navbarmenu.js"></script>
  <script src="../assets/js/all.min.js"></script>

</body>
</html>