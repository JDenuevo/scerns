<div class="d-flex justify-content-around align-items-center pt-3">
  
  <a href="./home.php"><img src="../assets/img/orig-logo.png" class="img-fluid" width="50px"></a>
  
  <h2 class="fw-semibold text-secondary">SCERNS</h2>
  
  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#logoutModal">
    <i class="fa-solid fa-arrow-right-from-bracket fa-xl text-secondary"></i>
  </button>

</div>

<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content p-5 rounded">
      <div class="text-center fw-bold">
        <i class="fa-solid fa-person-running mb-3 text-secondary" style="font-size: 100px;"></i>
        <br>
        Are you sure you want to logout?
      </div>
      <div class="d-flex justify-content-around mt-3">
        <button type="button" class="btn btn-dark rounded" data-bs-dismiss="modal">Close</button>
        <a href="../user/components/logout.php" class="btn btn-primary rounded">Logout</a>
      </div>
    </div>
  </div>
</div>