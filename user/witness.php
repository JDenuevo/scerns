<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SCERNS | Witness</title>
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
    <div class="d-flex justify-content-around pt-3">
      <a href="./home.php"><img src="../assets/img/orig-logo.png" class="img-fluid" width="50px"></a>
      <h2>SCERNS</h2>
      <a href="../index.php" class="text-deconration-none text-secondary">
        <i class="fa-solid fa-arrow-right-from-bracket fa-xl"></i>
      </a>
    </div>
    <h2>VICTIM</h2>
  </div>

  <br><br>
    
  <div class="container text-center py-5">
    <div class="text-start mb-5" style="#000">
      <a href="./home.php" class="text-decoration-none text-dark"><i class="fa-solid fa-arrow-left fa-2xl"></i></a>
    </div>
    <div class="row g-2">
      <div class="col-6">
        <a href="./medic.php" class="text-decoration-none">
          <div class="card bg-secondary rounded-5 shadow">
            <div class="card-body">
              <i class="fa-solid fa-truck-medical fa-2xl text-light"></i>
              <h2 class="card-title text-light my-2">MEDICS</h2>
            </div>
          </div>
         </a>
      </div>
      <div class="col-6">
        <a href="./police.php" class="text-decoration-none">
          <div class="card bg-secondary rounded-5 shadow">
            <div class="card-body">
              <i class="fa-solid fa-building-shield fa-2xl text-light"></i>
              <h2 class="card-title text-light my-2">POLICE</h2>
            </div>
          </div>
        </a>
      </div>
      <div class="col-6">
        <a href="./fire.php" class="text-decoration-none">
          <div class="card bg-secondary rounded-5 shadow">
            <div class="card-body">
              <i class="fa-solid fa-fire fa-2xl text-light"></i>
              <h2 class="card-title text-light my-2">FIRE</h2>
            </div>
          </div>
        </a>
      </div>
      <div class="col-6">
        <a href="./disaster.php" class="text-decoration-none">
          <div class="card bg-secondary rounded-5 shadow">
            <div class="card-body">
              <i class="fa-solid fa-hurricane fa-2xl text-light"></i>
              <h2 class="card-title text-light my-2">NATURAL DISASTER</h2>
            </div>
          </div>
        </a>
      </div>
    </div>

    <div class="container text-center pt-5">
      <button data-bs-toggle="modal" data-bs-target="#contact-modal" class="btn btn-primary rounded-pill border fs-4">
        <i class="fa-solid fa-address-book"></i> EMERGENCY CONTANTS
      </button>
    </div>
  </div>

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
<div class="modal fade" id="contact-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <div class="text-end">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="container text-center">
          <div class="position-relative my-3">
            <input type="text" class="form-control rounded-pill border border-primary" id="" placeholder="Search a Station">
            <a href="#" id="search" class="search-button" onclick="">
              <span class="fa fa-search text-dark me-1"></span>
            </a>
          </div>

          <div class="table-responsive">
            <table>

            </table>
          </div>

          <div class="row g-3">
            <div class="col-6">
              <div class="card bg-secondary rounded-5 shadow">
                <div class="card-body">
                CALOOCAN POLICE SUB-STATION 1 – BAGONG BARRIO
                Bagong Barrio Sub-Station 1 Contact Number(s):
                +632 364-6985
                Police Community Precints 
                Contact Number(s):
                PCP Brgy 28: +632 285-5379
                PCP Brgy 31: +632 285-3008
                PCP Brgy 179: +632 939-0846
                PCP Brgy 180: +632 939-0989
                </div>
              </div>
            </div>

            <div class="col-6">
              <div class="card bg-secondary rounded-5 shadow">
                <div class="card-body">
                CALOOCAN CITY POLICE STATION
                Samson Road, Sangandaan, Caloocan City
                Caloocan City Police Station Contact Number(s):
                Chief of Police: +63 998-967-4502
                +632 362-2714, +632 362-3291, 

                Police Community Precinct : 
                +632 310-7144, +63 917-051-1744 
                +632 962-8207, 
                +63 917-572-3326 +632 961-4674, 
                +63 917-572-4028 
                +632 962-0451 +632 277-1253, 
                +632 362-4654 +632 361-0041
                </div>
              </div>
            </div>

            <div class="col-6">
              <div class="card bg-secondary rounded-5 shadow">
                <div class="card-body">
                CALOOCAN POLICE SUB-STATION 2 – MAYPAJO
                Maypajo Sub-Station 2 Contact Number(s):
                +632 990-1889

                Police Community Precints Contact Number(s):
                PCP Brgy 181: +632 935-2696
                PCP Brgy 182: +632 935-7500
                PCP Brgy 183: +632 936-4830
                PCP Brgy 184: +632 962-0567
                PCP Brgy 179: +632 939-0846
                PCP Brgy 165: +632 938-5301
                PCP Brgy 166: +632 938-5212
                </div>
              </div>
            </div>

            <div class="col-6">
              <div class="card bg-secondary rounded-5 shadow">
                <div class="card-body">
                CALOOCAN CITY
                DISASTER RISK REDUCTION AND MANAGEMENT OFFICE

                +288825664
                </div>
              </div>

              <br>

              <div class="card bg-secondary rounded-5 shadow">
                <div class="card-body">
                CALOOCAN CITY
                BUREAU OF FIRE PROTECTION

                +253106527
                </div>
              </div>

            </div>

          </div>

        </div>
        
      </div>
    </div>
  </div>
</div>

