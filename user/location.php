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

</head>

<body>

  <div class="bg-primary text-center other-cont">
    <div class="d-flex justify-content-around pt-3">
      <a href="./home.php"><img src="../assets/img/orig-logo.png" class="img-fluid" width="50px"></a>
      <h2>SCERNS</h2>
      <a href="../index.php" class="text-deconration-none text-secondary">
        <i class="fa-solid fa-arrow-right-from-bracket fa-xl"></i>
      </a>
    </div>
    <h2>LOCATION</h2>
  </div>

  <br><br>
    
  <div class="container">

    <div>
      <iframe class="rounded-5" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15440.174965675702!2d120.9945888!3d14.653458500000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b686dd24e859%3A0xe442b57504cbf05f!2sUniversity%20of%20Caloocan%20City%20-%20South%20Campus!5e0!3m2!1sen!2sph!4v1698291916703!5m2!1sen!2sph" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
    </div>

    <div class="text-center my-4">
      <label class="fw-semibold">WAITING FOR RESPONSE.</label>
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
            <label>012345</label>
          </div>
        </div>
        <hr>
        <div>
          <label>Victim</label><br>
          <label class="fw-semibold mb-3">Vincent Buhay</label>
          <br>
          <label>Address</label><br>
          <label class="fw-semibold">1494-C A.MABINI STREET BRGY.10 CALOOCAN CITY</label>
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

</body>
</html>