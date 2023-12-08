<?php 
include 'php-header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SCERNS | Emergency Contacts</title>
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

  <div class="text-center other-cont">
    <!-- TOP NAVBAR -->
    <?php include '../user/components/navbar-top.php'; ?>

  </div>

  <div class="container p-4">
   
    <h3 class="mb-3">Emergency Contacts</h3>

    <div class="position-relative my-3">
      <input type="text" class="form-control rounded-pill border border-dark" id="" placeholder="Search...">
      <a href="#" id="search" class="search-button">
        <span class="fa fa-search text-dark me-1"></span>
      </a>
    </div>
    
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Company</th>
            <th scope="col">Contact/Telephone #</th>
            <th scope="col">City</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>Caloocan Power Rangers</th>
            <td>#090909 / #123123</td>
            <td>Caloocan</td>
          </tr>
        </tbody>
      </table>
    </div>
   
  </div>

  <br> <br> <br>

  <!-- BOTTOM NAVBAR -->
  <?php include '../user/components/navbar-bottom.php'; ?>
  <?php include '../user/components/notif-modal-user.php'; ?>
  <script src="../assets/js/bootstrap.bundle.js"></script>
  <script src="../assets/js/jquery-3.7.1.min.js"></script>
  <script src="../assets/js/navbarmenu.js"></script>
  <script src="../assets/js/all.min.js"></script>
 
</body>
</html>
