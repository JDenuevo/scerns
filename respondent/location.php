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

<style>
  .breadcrumb-item {
  position: relative;
  z-index: 1; /* Ensure breadcrumb items are on top of the pseudo-element */
}

.breadcrumb-item:not(:last-child)::after {
  content: url('../assets/img/lines.svg'); /* Replace with the correct path to your SVG file */
  position: absolute;
  top: 30%;
  right: -20px; /* Adjust the spacing as needed */
  transform: translateY(-50%);
}

</style>
<body>

  <div class="text-center other-cont">
    <div class="d-flex justify-content-around pt-3">
      <a href="./home.php"><img src="../assets/img/orig-logo.png" class="img-fluid" width="50px"></a>
      <h2>SCERNS</h2>
      <a href="../index.php" class="text-deconration-none text-secondary">
        <i class="fa-solid fa-arrow-right-from-bracket fa-xl"></i>
      </a>
    </div>
    <h2>LOCATION</h2>
  </div>

  <br>
    
  <div class="container">

    <div>
      <iframe class="rounded-5" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15440.174965675702!2d120.9945888!3d14.653458500000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b686dd24e859%3A0xe442b57504cbf05f!2sUniversity%20of%20Caloocan%20City%20-%20South%20Campus!5e0!3m2!1sen!2sph!4v1698291916703!5m2!1sen!2sph" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
    </div>

    <div class="container">
      <div class="d-flex justify-content-around">
          <button class="btn btn-secondary rounded-4 border shadow p-2 w-50 fw-semibold mx-2">VIEW</button>
          <button class="btn btn-secondary rounded-4 border shadow p-2 w-50 fw-semibold mx-2">RESPOND</button>
      </div>
    </div>

    <hr style="color: #000; border-width: 3px;">

    <div class="card">
      <div class="card-body text-center">
        <label class="fw-semibold fs-4">Responders Info</label>
        <div class="d-flex align-items-stretch">
          <div class="d-flex flex-row px-3 align-items-center my-2">
            <div class="rounded-circle bg-secondary d-flex align-items-center justify-content-center" style="height: 80px; width: 80px;">
              <img src="../assets/img/annabelle.jpg" class="img-fluid rounded-circle">
            </div>
          </div>
          <div class="text-start my-auto">
            <h4>Annabelle Rama</h4>
            <label>+63 970 657 4356</label>
          </div>
        </div>
        <hr>
        
        <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '';">
          <ol class="breadcrumb d-flex justify-content-around">
            <li class="breadcrumb-item">
              <div class="d-flex flex-column align-items-center my-2">
                <div class="rounded-circle border border-5 border-secondary d-flex align-items-center justify-content-center" style="height: 60px; width: 60px;">
                  <i class="fa-solid fa-truck-medical fa-xl text-primary"></i>
                </div>
                <div class="text-center mt-2">Move</div>
              </div>
            </li>
            <li class="breadcrumb-item">
              <div class="d-flex flex-column align-items-center my-2">
                <div class="rounded-circle border border-5 border-secondary d-flex align-items-center justify-content-center" style="height: 60px; width: 60px;">
                  <i class="fa-solid fa-shuffle fa-xl text-primary"></i>
                </div>
                <div class="text-center mt-2">Enroute</div>
              </div>
            </li>
            <li class="breadcrumb-item">
              <div class="d-flex flex-column align-items-center my-2">
                <div class="rounded-circle border border-5 border-dark d-flex align-items-center justify-content-center" style="height: 60px; width: 60px;">
                  <i class="fa-solid fa-helicopter-symbol fa-xl text-primary"></i>
                </div>
                <div class="text-center mt-2">Arrive</div>
              </div>
            </li>
          </ol>
        </nav>

      </div>
    </div>
   

  </div>

  <br> <br> <br> <br>

  <!-- BOTTOM NAVBAR -->
  <?php include '../respondent/components/navbar-bottom.php'; ?>

  <script src="../assets/js/bootstrap.bundle.js"></script>
  <script src="../assets/js/jquery-3.7.1.min.js"></script>
  <script src="../assets/js/navbarmenu.js"></script>
  <script src="../assets/js/all.min.js"></script>

</body>
</html>