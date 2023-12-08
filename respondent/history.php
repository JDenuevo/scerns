<?php 
include '../conn.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SCERNS | History</title>
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

#pills-tab .nav-link {
  color: #000;
}

#pills-tab .nav-link.active,
#pills-tab .nav-link:focus {
  background-color: #6F9472 !important;
  color: #fff !important;
}

#pills-tab .nav-link:hover {
  background-color: #8DA48F !important;
  color: #fff !important;
}

</style>

<body>

  <div class="text-center other-cont">
    <!-- TOP NAVBAR -->
    <?php include '../respondent/components/navbar-top.php'; ?>
  </div>

  <div class="container p-4">
   
    <h3 class="mb-3">History</h3>

    <div class="position-relative my-3">
      <input type="text" class="form-control rounded-pill border border-dark" id="" placeholder="Search...">
      <a href="#" id="search" class="search-button">
        <span class="fa fa-search text-dark me-1"></span>
      </a>
    </div>

    <ul class="nav nav-pills nav-tabs mb-3" id="pills-tab" role="tablist">
      <li class="nav-items" role="presentation">
        <button class="nav-link active" id="pills-medic-tab" data-bs-toggle="pill" data-bs-target="#pills-medic" type="button" role="tab" aria-controls="pills-medic" aria-selected="true"><i class="fa-solid fa-truck-medical"></i> Medic</button>
      </li>
      <li class="nav-items" role="presentation">
        <button class="nav-link" id="pills-police-tab" data-bs-toggle="pill" data-bs-target="#pills-police" type="button" role="tab" aria-controls="pills-police" aria-selected="false"><i class="fa-solid fa-building-shield"></i> Police</button>
      </li>
      <li class="nav-items" role="presentation">
        <button class="nav-link" id="pills-fire-tab" data-bs-toggle="pill" data-bs-target="#pills-fire" type="button" role="tab" aria-controls="pills-fire" aria-selected="false"><i class="fa-solid fa-fire"></i> Fire</button>
      </li>
      <li class="nav-items" role="presentation">
      <button class="nav-link" id="pills-disaster-tab" data-bs-toggle="pill" data-bs-target="#pills-disaster" type="button" role="tab" aria-controls="pills-disaster" aria-selected="false"><i class="fa-solid fa-hurricane"></i> Disaster</button>
      </li>
    </ul>

    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-medic" role="tabpanel" aria-labelledby="pills-medic-tab" tabindex="0">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Case</th>
                <th scope="col">Respondents</th>
                <th scope="col">Place</th>
                <th scope="col">Date</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>Fire Alarm #3</th>
                <td>Caloocan Power Rangers</td>
                <td>Caloocan</td>
                <td>December 30, 2023</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="tab-pane fade" id="pills-police" role="tabpanel" aria-labelledby="pills-police-tab" tabindex="0">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Case</th>
                <th scope="col">Respondents</th>
                <th scope="col">Place</th>
                <th scope="col">Date</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>Fire Alarm #3</th>
                <td>Caloocan Power Rangers</td>
                <td>Caloocan</td>
                <td>December 30, 2023</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="tab-pane fade" id="pills-fire" role="tabpanel" aria-labelledby="pills-fire-tab" tabindex="0">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Case</th>
                <th scope="col">Respondents</th>
                <th scope="col">Place</th>
                <th scope="col">Date</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>Fire Alarm #3</th>
                <td>Caloocan Power Rangers</td>
                <td>Caloocan</td>
                <td>December 30, 2023</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="tab-pane fade" id="pills-disaster" role="tabpanel" aria-labelledby="pills-disaster-tab" tabindex="0">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Case</th>
                <th scope="col">Respondents</th>
                <th scope="col">Place</th>
                <th scope="col">Date</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>Fire Alarm #3</th>
                <td>Caloocan Power Rangers</td>
                <td>Caloocan</td>
                <td>December 30, 2023</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
   
  </div>

  <br> <br> <br>

  <!-- BOTTOM NAVBAR -->
  <?php include '../respondent/components/navbar-bottom.php'; ?>
  
  <?php include '../respondent/components/notif-modal.php'; ?>

  <script src="../assets/js/bootstrap.bundle.js"></script>
  <script src="../assets/js/jquery-3.7.1.min.js"></script>
  <script src="../assets/js/navbarmenu.js"></script>
  <script src="../assets/js/all.min.js"></script>
 
</body>
</html>
