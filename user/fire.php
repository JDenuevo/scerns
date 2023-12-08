<?php 
include 'php-header.php';
?>
<?php 
if ($_GET['i'] == "victim") {
  $requestor_type = "v";
} elseif ($_GET['i'] == "witness") {
  $requestor_type = "w";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SCERNS | Fire</title>
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

</head>
<body>

  <div class="text-center home-cont">
    <!-- TOP NAVBAR -->
    <?php include '../user/components/navbar-top.php'; ?>
    <br>
    <i class="fa-solid fa-fire fa-2xl"></i>
    <h2>FIRE</h2>
  </div>

  <br><br>
    
  <div class="container text-center">

    <div class="d-flex justify-content-between align-items-center mb-5">

      <a href="./victim.php" class="text-decoration-none text-dark"><i class="fa-solid fa-arrow-left fa-2xl"></i></a>

      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#guide-modal">
        <i class="fa-regular fa-circle-question text-light"></i> More info for Fire Alert Level
      </button>

    </div>

     
    <div class="container text-center">
      <form action="report-qry.php" method="post"> 
        <h3></h3>
        <input type="hidden" name="requester_type" value="<?php echo $requestor_type; ?>">
        <input type="hidden" name="type_of_emergency" value="Fire">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="fullname" value="<?php echo $fullname; ?>">
        <input type="hidden" name="mobile" value="<?php echo $contact_number; ?>">
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="addressInput" name="address" placeholder="" required>
          <label for="addressInput">Address</label>
          <ul id="suggestions"></ul>
        </div>
        
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" name="landmark" placeholder="" required>
          <label for="floatingInput">Nearest Landmark</label>
        </div>
        
        <h3></h3>
        <div class="form-floating">
          <select class="form-select" id="floatingSelect" name="levels" aria-label="" required>
            <option selected>Fire Level</option>
            <option value="1">Level 1 (1-3 houses)</option>
            <option value="2">Level 2 (4-5 houses)</option>
            <option value="3">Level 3 (6-9 houses)</option>
            <option value="4">Level 4 (10-12 houses)</option>
            <option value="5">Level 5 (13 or more houses)</option>
          </select>
          <label for="floatingSelect">Choose how level of worse</label>
        </div>

        <button type="submit" class="btn btn-primary rounded-4 w-50 mt-5">Confirm Request</button>
      </form>
    </div>
    
  </div>

  <br> <br> <br>

  <!-- BOTTOM NAVBAR -->
  <?php include '../user/components/navbar-bottom.php'; ?>
  <?php include '../user/components/notif-modal-user.php'; ?>
  <script src="../assets/js/bootstrap.bundle.js"></script>
  <script src="../assets/js/jquery-3.7.1.min.js"></script>
  <script src="../assets/js/all.min.js"></script>
  <script>
    // Reference: https://nominatim.org/release-docs/develop/api/Search/
    function suggestAddresses() {
        var input = document.getElementById('addressInput');
        var suggestionsList = document.getElementById('suggestions');

        // Clear previous suggestions
        suggestionsList.innerHTML = '';

        // Fetch address suggestions from Nominatim API
        fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${input.value}`)
          .then(response => {
            if (!response.ok) {
              throw new Error('Network response was not ok');
            }
            return response.json();
          })
          .then(data => {
            data.forEach(item => {
              var suggestionItem = document.createElement('li');
              suggestionItem.textContent = item.display_name;
              suggestionItem.addEventListener('click', function() {
                input.value = item.display_name;
                suggestionsList.innerHTML = ''; // Clear suggestions after selection
              });
              suggestionsList.appendChild(suggestionItem);
            });
          })
          .catch(error => console.error('Error fetching address suggestions:', error));
      }

      // Add an event listener for the 'input' event on the address input
      document.getElementById('addressInput').addEventListener('input', suggestAddresses);
</script>
</body>
</html>

<!-- Modal -->
<div class="modal fade" id="guide-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
       
        <div class="card border border-success rounded mb-3">
          <div class="card-body">
            <label><i class="fa-solid fa-circle mb-3 text-success"></i><span> (Low) </span>Fire Alert Level 1</label>
            <p>Condition: Low risk of fire.</p>
            <p>Instructions: Remain vigilant, follow fire safety guidelines, and report any signs of fire.</p>
          </div>
        </div>

        <div class="card border border-warning rounded mb-3">
          <div class="card-body">
            <label><i class="fa-solid fa-circle mb-3 text-warning"></i><span> (Elevated) </span>Fire Alert Level 2</label>
            <p>Condition: Moderate risk, fire likely.</p>
            <p>Instructions: Prepare for evacuation, secure property, and stay informed through official channels.</p>
          </div>
        </div>

        <div class="card border border-danger rounded">
          <div class="card-body">
            <label><i class="fa-solid fa-circle mb-3 text-danger"></i><span> (Severe) </span>Fire Alert Level 3</label>
            <p>Condition: Extreme risk, fire active and spreading.</p>
            <p>Instructions: Evacuate immediately, follow designated evacuation routes, and seek shelter in a safe location.</p>
          </div>
        </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

