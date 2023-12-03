<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SCERNS | Home</title>
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

    <div class="p-3 text-start my-2">
      <h3 class="fw-semibold text-secondary">Welcome to <span class="fw-bold">SCERNS</span></h3>
    </div>
  </div>

  <br><br>
    
  <div class="container d-flex align-items-center justify-content-center text-center py-3">
    <div class="rounded-circle border border-5 position-relative" style="width: 300px; height: 300px;">
      <button data-bs-toggle="modal" data-bs-target="#select-modal" class="btn btn-primary d-flex align-items-center rounded-circle border border-5 justify-content-center text-decoration-none" style="width: 100%; height: 100%;">
        <h1 class="text-white">Emergency<br>Button</h1>
      </button>
    </div>
  </div>

  <div class="container text-center">
    <label class="text-semibold text-dark fs-3">TAP THE BUTTON TO SEND ALERTS.</label>
  </div>

  <br><br>

  <br> <br> <br>

  <!-- BOTTOM NAVBAR -->
  <?php include '../user/components/navbar-bottom.php'; ?>

  <script src="../assets/js/bootstrap.bundle.js"></script>
  <script src="../assets/js/jquery-3.7.1.min.js"></script>
  <script src="../assets/js/navbarmenu.js"></script>
  <script src="../assets/js/all.min.js"></script>

</body>
</html>

<!-- Modal -->
<div class="modal fade" id="select-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <div class="text-end">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="container text-center px-5">
          <h4>Please choose between these</h4>
          <br>
          <div class="d-flex flex-column justify-content-center">
            <a href="victim.php" class="btn btn-primary rounded-5 border">
              <span class="text-light fs-2">VICTIM</span>
            </a>
            <h3 class="my-4">OR</h3>
            <a href="witness.php" class="btn btn-primary rounded-5 border">
              <span class="text-light fs-2">WITNESS</span>
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
