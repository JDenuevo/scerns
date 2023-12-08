
<div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="off-nav1" aria-labelledby="staticBackdropLabel"> 
  <div class="offcanvas-body bg-primary">
    <div class="text-end">
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="text-center">
      <label class="fw-semibold text-light">Navbar</label>
    </div>

    <hr class="py-2" style="color: #FFF; border-width: 3px;">

    <a href="#off-nav2" data-bs-toggle="offcanvas" class="text-dark text-decoration-none my-2">
      <div class="d-flex flex-row px-3 align-items-center">
        <div class="rounded-2 bg-light d-flex align-items-center justify-content-center" style="height: 50px; width: 50px;">
          <i class="fa-solid fa-circle-user fa-xl"></i>
        </div>
        <label class="fs-6 mx-2 fw-semibold text-light">Profile</label>
        <div class="flex-grow-1"></div>
        <i class="fa-solid fa-chevron-right fa-xl" style="color: #FFF;"></i>
      </div>
    </a>

    <a href="./gesture.php" class="text-dark text-decoration-none">
      <div class="d-flex flex-row px-3 align-items-center my-2">
        <div class="rounded-2 bg-light d-flex align-items-center justify-content-center" style="height: 50px; width: 50px;">
          <i class="fa-solid fa-hand fa-xl"></i>
        </div>
        <label class="fs-6 mx-2 fw-semibold text-light">Gesture Settings</label>
        <div class="flex-grow-1"></div>
        <i class="fa-solid fa-chevron-right fa-xl" style="color: #FFF;"></i>
      </div>
    </a>

    <a href="./contact.php" class="text-dark text-decoration-none">
      <div class="d-flex flex-row px-3 align-items-center my-2">
        <div class="rounded-2 bg-light d-flex align-items-center justify-content-center" style="height: 50px; width: 50px;">
          <i class="fa-solid fa-address-card fa-xl"></i>
        </div>
        <label class="fs-6 mx-2 fw-semibold text-light">Emergency Contacts</label>
        <div class="flex-grow-1"></div>
        <i class="fa-solid fa-chevron-right fa-xl" style="color: #FFF;"></i>
      </div>
    </a>

    <a href="./history.php?tab=Medic" class="text-dark text-decoration-none">
      <div class="d-flex flex-row px-3 align-items-center my-2">
        <div class="rounded-2 bg-light d-flex align-items-center justify-content-center" style="height: 50px; width: 50px;">
          <i class="fa-solid fa-clock-rotate-left fa-xl"></i>
        </div>
        <label class="fs-6 mx-2 fw-semibold text-light">History</label>
        <div class="flex-grow-1"></div>
        <i class="fa-solid fa-chevron-right fa-xl" style="color: #FFF;"></i>
      </div>
    </a>

    <!-- <a href="#" class="text-dark text-decoration-none">
      <div class="d-flex flex-row px-3 align-items-center my-2">
        <div class="rounded-2 bg-light d-flex align-items-center justify-content-center" style="height: 50px; width: 50px;">
          <i class="fa-solid fa-gear fa-xl"></i>
        </div>
        <label class="fs-6 mx-2 fw-semibold text-light">Settings</label>
        <div class="flex-grow-1"></div>
        <i class="fa-solid fa-chevron-right fa-xl" style="color: #FFF;"></i>
      </div>
    </a> -->

  </div>
</div>

<?php
  $sql = "SELECT * FROM scerns_login WHERE email = '$email'";
  $results = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($results);

  // Check if the image is null or empty
  if ($row['prof_img'] == null || empty($row['prof_img'])) {
      // Set default image path if img is null or empty
      $src = "../assets/img/default.jpg";
  } else {
      // Use the image from the database
      $imageData = base64_encode($row['prof_img']);

      // Determine the image MIME type based on the content
      $imageInfo = getimagesizefromstring(base64_decode($imageData));
      $mime_type = $imageInfo['mime'];

      // Construct the src attribute dynamically
      $src = "data:{$mime_type};base64,{$imageData}";
  }
  ?>
<div class="offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="off-nav2" aria-labelledby="staticBackdropLabel"> 
  <div class="offcanvas-body bg-primary">
    <div class="d-flex justify-content-between">
      <a href="#off-nav1" data-bs-toggle="offcanvas"><i class="fa-solid fa-chevron-left fa-xl" style="color: #FFF;"></i></a>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="container d-flex flex-column justify-content-center text-center">
      <label class="fw-semibold text-light">My Profile</label>
      <div class="">
        <img src="<?php echo $src; ?>"  class="img-fluid rounded-circle" style="width: 80px; height: 80px;">
      </div>
      <label class="fw-semibold text-light"><?php echo $row['fullname']; ?></label>
    </div>

    <hr class="py-2" style="color: #FFF; border-width: 3px;">

    <a href="./account.php" class="text-dark text-decoration-none my-2" id="off-nav">
      <div class="d-flex flex-row px-3 align-items-center">
        <div class="rounded-2 bg-light d-flex align-items-center justify-content-center" style="height: 50px; width: 50px;">
          <i class="fa-solid fa-user-gear fa-xl"></i>
        </div>
        <label class="fs-6 mx-2 fw-semibold text-light">Account Settings</label>
        <div class="flex-grow-1"></div>
        <i class="fa-solid fa-chevron-right fa-xl" style="color: #FFF;"></i>
      </div>
    </a>

  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    document.addEventListener('click', function (event) {
        var offcanvasLink = document.querySelector('.nav-link[data-bs-toggle="offcanvas"]');
        var offcanvas = new bootstrap.Offcanvas(offcanvasLink.getAttribute('href'));

        if (!offcanvasLink.contains(event.target)) {
            // Click is outside the offcanvas link
            offcanvas.hide();
        }
    });
});
</script>
