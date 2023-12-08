<?php 
include 'php-header.php';
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

<body>

  <div class="text-center other-cont">
    <!-- TOP NAVBAR -->
    <?php include '../user/components/navbar-top.php'; ?>
    <h2>LOCATION</h2>
  </div>

  <br>
    
  <div class="container">

  <a href="./home.php"><i class="fa-solid fa-arrow-left fa-2xl text-secondary"></i></a>

  <?php
    // Your address
    $address = $_SESSION["address"];

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

    <div class="text-center my-4">
      <label class="fw-semibold" id="loadingLabel">WAITING FOR RESPONSE.</label>
    </div>

    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-stretch">
          <div class="d-flex flex-row px-3 align-items-center my-2">
            <div class="rounded-circle bg-secondary d-flex align-items-center justify-content-center" style="height: 50px; width: 50px;">
              <i class="fa-solid fa-location-dot fa-xl" style="color: #618264;"></i>
            </div>
          </div>
          <div class="text-start">
            <h4>Request Number:</h4>
            <label><?php echo $_SESSION["unique_id"]; ?></label>
          </div>
        </div>

        <hr>

        <div>
          <h6 class="fw-semibold mb-3">Request Level: <i class="fa-solid fa-circle text-success"></i> <span class="mb-3"><?php echo $_SESSION["levels"]; ?></span> </h6>

          <h6 class="fw-semibold">Address:</h6>
          <label class="mb-3"><?php echo $_SESSION["address"]; ?></label>
        
          <h6 class="fw-semibold">Landmark:</h6>
          <label><?php echo $_SESSION["landmark"]; ?></label>

          <hr>
      
          <h6 class="fw-bold text-center mb-3">Requester Contact Informations</h6>

          <h6 class="fw-semibold">Requestor:</h6>
          <label class="mb-3"><?php echo $_SESSION["fullname"]; ?></label>

          <h6 class="fw-semibold">Email Address:</h6>
          <label class="mb-3"><?php echo $_SESSION["email"]; ?></label>
          
          <h6 class="fw-semibold">Phone Number:</h6>
          <label><?php echo $_SESSION["mobile"]; ?></label>
        </div>

      </div>
    </div>
   

  </div>

  <br> <br> <br> <br> <br>

  <!-- BOTTOM NAVBAR -->
  <?php include '../user/components/navbar-bottom.php'; ?>

  <script src="../assets/js/bootstrap.bundle.js"></script>
  <script src="../assets/js/jquery-3.7.1.min.js"></script>
  <script src="../assets/js/navbarmenu.js"></script>
  <script src="../assets/js/all.min.js"></script>

  <script>
    // Function to update the label text with dots
      function updateLabel() {
        const label = document.getElementById('loadingLabel');
        const currentText = label.innerText;
        const dots = currentText.match(/\./g);
        const numberOfDots = dots ? dots.length : 0;

        // Limit the number of dots to 3
        const newDots = numberOfDots < 3 ? '.'.repeat(numberOfDots + 1) : '.';

        label.innerText = `WAITING FOR RESPONSE${newDots}`;
      }

      // Call the updateLabel function every 500 milliseconds
      const intervalId = setInterval(updateLabel, 500);

      // Check if $_SESSION["unique_id"] is in scerns_status using AJAX
      function checkAndUpdateLabel() {
        const uniqueId = '<?php echo $_SESSION["unique_id"]; ?>';

        // Create a new XMLHttpRequest object
        const xhr = new XMLHttpRequest();

        // Configure it: GET-request for the check script
        xhr.open('GET', '../php/check_status.php?unique_id=' + uniqueId, true);

        // Send the request
        xhr.send();

        // This will be called after the response is received
        xhr.onload = function () {
          if (xhr.status === 200) {
            const response = xhr.responseText;
            if (response === 'found') {
              // Stop the loading animation and update the label text
              clearInterval(intervalId);
              document.getElementById('loadingLabel').innerText = 'RESPONSE RECEIVED!';
            }
          }
        };
      }

      // Check and update the label every 500 milliseconds
      const checkIntervalId = setInterval(checkAndUpdateLabel, 500);

      // Stop checking after a certain period (e.g., 10000 milliseconds or 10 seconds)
      setTimeout(() => {
        clearInterval(checkIntervalId);
      }, 5000);
  </script>




</body>
</html>