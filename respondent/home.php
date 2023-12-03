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
    <?php include '../respondent/components/navbar-top.php'; ?>

    <div class="p-3 text-start my-2">
      <h3 class="fw-semibold text-secondary">Welcome to <span class="fw-bold">SCERNS</span></h3>
    </div>
  </div>

  <br><br>
 
  
  <br> <br> <br>

  <!-- BOTTOM NAVBAR -->
  <?php include '../respondent/components/navbar-bottom.php'; ?>

  <script src="../assets/js/bootstrap.bundle.js"></script>
  <script src="../assets/js/jquery-3.7.1.min.js"></script>
  <script src="../assets/js/navbarmenu.js"></script>
  <script src="../assets/js/all.min.js"></script>

</body>
</html>

<!-- Modal -->
<div class="modal fade" id="notif-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="text-end">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="d-flex justify-content-around">
            <button class="btn btn-secondary rounded-4 border shadow p-2 w-50 fw-semibold mx-2 active" data-bs-toggle="modal" data-bs-target="#">Near from us</button>
            <button class="btn btn-secondary rounded-4 border shadow p-2 w-50 fw-semibold mx-2" data-bs-toggle="modal" data-bs-target="#msg-modal">Far from us</button>
          </div>
          <h2 class="text-center my-3">Notification 1</h2>
          <div class="row g-3">          
            <div class="col-12">
              <div class="card bg-primary rounded-3 shadow">
                <div class="card-body text-secondary">
                  <div class="d-flex">
                    <i class="fa-solid fa-fire fa-2xl my-auto text-light"></i>
                    <h5 class="fw-bold my-auto ms-3">2nd Alarm</h5>
                  </div>
                  <div class="text-start my-3">
                    <h6 class="fw-semibold">Location : <span class="fw-normal">Brgy.123 South Caloocan City</span></h6>
                  </div>
                  <div class="text-start my-3">
                    <h6 class="fw-semibold">Involved : <span class="fw-normal">Residential</span></h6>
                  </div>
                  <div class="d-flex justify-content-around">
                    <button class="btn btn-secondary rounded-pill shadow p-2 w-50 fw-semibold mx-2"><i class="fa-solid fa-angles-right"></i> Go</button>
                    <button class="btn btn-secondary rounded-pill shadow p-2 w-50 fw-semibold mx-2"><i class="fa-solid fa-phone"></i> Call</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card bg-primary rounded-3 shadow">
                <div class="card-body text-secondary">
                  <div class="d-flex">
                    <i class="fa-solid fa-hurricane fa-2xl my-auto text-light"></i>
                    <h5 class="fw-bold my-auto ms-3">Car Accident</h5>
                  </div>
                  <div class="text-start my-3">
                    <h6 class="fw-semibold">Location : <span class="fw-normal">Brgy.123 South Caloocan City</span></h6>
                  </div>
                  <div class="text-start my-3">
                    <h6 class="fw-semibold">Involved : <span class="fw-normal">1 Motorcycle & Van</span></h6>
                  </div>
                  <div class="d-flex justify-content-around">
                    <button class="btn btn-secondary rounded-pill shadow p-2 w-50 fw-semibold mx-2"><i class="fa-solid fa-angles-right"></i> Go</button>
                    <button class="btn btn-secondary rounded-pill shadow p-2 w-50 fw-semibold mx-2"><i class="fa-solid fa-phone"></i> Call</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card bg-primary rounded-3 shadow">
                <div class="card-body text-secondary">
                  <div class="d-flex">
                    <i class="fa-solid fa-hurricane fa-2xl my-auto text-light"></i>
                    <h5 class="fw-bold my-auto ms-3">Signal No.2</h5>
                  </div>
                  <div class="text-start my-3">
                    <h6 class="fw-semibold">Location : <span class="fw-normal">Brgy.123 South Caloocan City</span></h6>
                  </div>
                  <div class="text-start my-3">
                    <h6 class="fw-semibold">Involved : <span class="fw-normal">Flood</span></h6>
                  </div>
                  <div class="d-flex justify-content-around">
                    <button class="btn btn-secondary rounded-pill shadow p-2 w-50 fw-semibold mx-2"><i class="fa-solid fa-angles-right"></i> Go</button>
                    <button class="btn btn-secondary rounded-pill shadow p-2 w-50 fw-semibold mx-2"><i class="fa-solid fa-phone"></i> Call</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="msg-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="text-end">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="d-flex justify-content-around">
            <button class="btn btn-secondary rounded-4 border shadow p-2 w-50 fw-semibold mx-2" data-bs-toggle="modal" data-bs-target="#notif-modal">Near from us</button>
            <button class="btn btn-secondary rounded-4 border shadow p-2 w-50 fw-semibold mx-2 active" data-bs-toggle="modal" data-bs-target="#">Far from us</button>
          </div>
          <h2 class="text-center my-3">Notification 2</h2>
          <div class="row g-3">          
            <div class="col-12">
              <div class="card bg-primary rounded-3 shadow">
                <div class="card-body text-secondary">
                  <div class="d-flex">
                    <i class="fa-solid fa-fire fa-2xl my-auto text-light"></i>
                    <h5 class="fw-bold my-auto ms-3">2nd Alarm</h5>
                  </div>
                  <div class="text-start my-3">
                    <h6 class="fw-semibold">Location : <span class="fw-normal">Brgy.123 South Caloocan City</span></h6>
                  </div>
                  <div class="text-start my-3">
                    <h6 class="fw-semibold">Involved : <span class="fw-normal">Residential</span></h6>
                  </div>
                  <div class="text-start my-3">
                    <h6 class="fw-semibold">Status : <span class="fw-normal">Fire out</span></h6>
                  </div>
                  <div class="text-center">
                    <button class="btn btn-secondary rounded-pill shadow p-2 w-50 fw-semibold mx-2"><i class="fa-solid fa-person-walking-arrow-right"></i> Respond</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card bg-primary rounded-3 shadow">
                <div class="card-body text-secondary">
                  <div class="d-flex">
                    <i class="fa-solid fa-hurricane fa-2xl my-auto text-light"></i>
                    <h5 class="fw-bold my-auto ms-3">2nd Alarm</h5>
                  </div>
                  <div class="text-start my-3">
                    <h6 class="fw-semibold">Location : <span class="fw-normal">Brgy.123 South Caloocan City</span></h6>
                  </div>
                  <div class="text-start my-3">
                    <h6 class="fw-semibold">Involved : <span class="fw-normal">Residential</span></h6>
                  </div>
                  <div class="text-start my-3">
                    <h6 class="fw-semibold">Status : <span class="fw-normal">Need Assistance</span></h6>
                  </div>
                  <div class="text-center">
                    <button class="btn btn-secondary rounded-pill shadow p-2 w-50 fw-semibold mx-2"><i class="fa-solid fa-person-walking-arrow-right"></i> Respond</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card bg-primary rounded-3 shadow">
                <div class="card-body text-secondary">
                  <div class="d-flex">
                    <i class="fa-solid fa-hurricane fa-2xl my-auto text-light"></i>
                    <h5 class="fw-bold my-auto ms-3">Signal No.2</h5>
                  </div>
                  <div class="text-start my-3">
                    <h6 class="fw-semibold">Location : <span class="fw-normal">Brgy.123 South Caloocan City</span></h6>
                  </div>
                  <div class="text-start my-3">
                    <h6 class="fw-semibold">Involved : <span class="fw-normal">Flood</span></h6>
                  </div>
                  <div class="text-start my-3">
                    <h6 class="fw-semibold">Status : <span class="fw-normal">7th Level of Water / Need Boat</span></h6>
                  </div>
                  <div class="text-center">
                    <button class="btn btn-secondary rounded-pill shadow p-2 w-50 fw-semibold mx-2"><i class="fa-solid fa-person-walking-arrow-right"></i> Respond</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
