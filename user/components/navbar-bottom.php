<nav class="navbar navbar-expand-lg fixed-bottom sidebar-nav" id="mobile-navbar">
  <ul id="sidebarnav" class="nav nav-pills w-100 mx-2">
    <li class="nav-item sidebar-item text-center my-auto">
      <a class="nav-link sidebar-link text-decoration-none text-secondary" href="./notification.php" aria-expanded="false">
        <i class="fa-solid fa-bell fa-xl"></i>
      </a>
    </li>
    <li class="nav-item sidebar-item text-center my-auto">
      <a class="nav-link sidebar-link text-decoration-none text-secondary" href="./home.php" aria-expanded="false">
        <i class="fa-solid fa-house fa-xl"></i>
      </a>
    </li>
    <li class="nav-item sidebar-item text-center my-auto">
      <a class="nav-link sidebar-link text-decoration-none text-secondary" data-bs-toggle="offcanvas" href="#off-nav1" aria-expanded="false">
        <i class="fa-solid fa-bars fa-xl"></i>
      </a>
    </li>
  </ul>
</nav>

<div class="offcanvas offcanvas-start" tabindex="-1" id="off-nav1" aria-labelledby="off-nav">
  <div class="offcanvas-body bg-primary">
    <div class="text-end">
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="container d-flex flex-column justify-content-center text-center">
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

    <a href="#" class="text-dark text-decoration-none">
      <div class="d-flex flex-row px-3 align-items-center my-2">
        <div class="rounded-2 bg-light d-flex align-items-center justify-content-center" style="height: 50px; width: 50px;">
          <i class="fa-solid fa-hand fa-xl"></i>
        </div>
        <label class="fs-6 mx-2 fw-semibold text-light">Gesture Settings</label>
        <div class="flex-grow-1"></div>
        <i class="fa-solid fa-chevron-right fa-xl" style="color: #FFF;"></i>
      </div>
    </a>

    <a href="#" class="text-dark text-decoration-none">
      <div class="d-flex flex-row px-3 align-items-center my-2">
        <div class="rounded-2 bg-light d-flex align-items-center justify-content-center" style="height: 50px; width: 50px;">
          <i class="fa-solid fa-address-card fa-xl"></i>
        </div>
        <label class="fs-6 mx-2 fw-semibold text-light">Emergency Contacts</label>
        <div class="flex-grow-1"></div>
        <i class="fa-solid fa-chevron-right fa-xl" style="color: #FFF;"></i>
      </div>
    </a>

    <a href="#" class="text-dark text-decoration-none">
      <div class="d-flex flex-row px-3 align-items-center my-2">
        <div class="rounded-2 bg-light d-flex align-items-center justify-content-center" style="height: 50px; width: 50px;">
          <i class="fa-solid fa-file-shield fa-xl"></i>
        </div>
        <label class="fs-6 mx-2 fw-semibold text-light">Privacy & Policy</label>
        <div class="flex-grow-1"></div>
        <i class="fa-solid fa-chevron-right fa-xl" style="color: #FFF;"></i>
      </div>
    </a>

    <a href="#" class="text-dark text-decoration-none">
      <div class="d-flex flex-row px-3 align-items-center my-2">
        <div class="rounded-2 bg-light d-flex align-items-center justify-content-center" style="height: 50px; width: 50px;">
          <i class="fa-solid fa-circle-question fa-xl"></i>
        </div>
        <label class="fs-6 mx-2 fw-semibold text-light">Help Center</label>
        <div class="flex-grow-1"></div>
        <i class="fa-solid fa-chevron-right fa-xl" style="color: #FFF;"></i>
      </div>
    </a>

    <a href="#" class="text-dark text-decoration-none">
      <div class="d-flex flex-row px-3 align-items-center my-2">
        <div class="rounded-2 bg-light d-flex align-items-center justify-content-center" style="height: 50px; width: 50px;">
          <i class="fa-solid fa-gear fa-xl"></i>
        </div>
        <label class="fs-6 mx-2 fw-semibold text-light">Settings</label>
        <div class="flex-grow-1"></div>
        <i class="fa-solid fa-chevron-right fa-xl" style="color: #FFF;"></i>
      </div>
    </a>

  </div>
</div>


<div class="offcanvas offcanvas-start" tabindex="-1" id="off-nav2" aria-labelledby="off-nav">
  <div class="offcanvas-body bg-primary">
    <div class="d-flex justify-content-between">
      <a href="#off-nav1" data-bs-toggle="offcanvas"><i class="fa-solid fa-chevron-left fa-xl" style="color: #FFF;"></i></a>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="container d-flex flex-column justify-content-center text-center">
      <label class="fw-semibold text-light">My Profile</label>
      <div class="">
        <img src="../assets/img/annabelle.jpg" class="img-fluid rounded-circle w-25">
      </div>
      <label class="fw-semibold text-light">Annabelle Rama</label>
    </div>

    <hr class="py-2" style="color: #FFF; border-width: 3px;">

    <a href="#" class="text-dark text-decoration-none my-2" id="off-nav">
      <div class="d-flex flex-row px-3 align-items-center">
        <div class="rounded-2 bg-light d-flex align-items-center justify-content-center" style="height: 50px; width: 50px;">
          <i class="fa-solid fa-user-gear fa-xl"></i>
        </div>
        <label class="fs-6 mx-2 fw-semibold text-light">User Settings</label>
        <div class="flex-grow-1"></div>
        <i class="fa-solid fa-chevron-right fa-xl" style="color: #FFF;"></i>
      </div>
    </a>

    <a href="#" class="text-dark text-decoration-none" id="off-nav">
      <div class="d-flex flex-row px-3 align-items-center my-2">
        <div class="rounded-2 bg-light d-flex align-items-center justify-content-center" style="height: 50px; width: 50px;">
          <i class="fa-solid fa-user-pen fa-xl"></i>
        </div>
        <label class="fs-6 mx-2 fw-semibold text-light">Edit Profile</label>
        <div class="flex-grow-1"></div>
        <i class="fa-solid fa-chevron-right fa-xl" style="color: #FFF;"></i>
      </div>
    </a>

    <a href="#" class="text-dark text-decoration-none" id="off-nav">
      <div class="d-flex flex-row px-3 align-items-center my-2">
        <div class="rounded-2 bg-light d-flex align-items-center justify-content-center" style="height: 50px; width: 50px;">
          <i class="fa-solid fa-user-lock fa-xl"></i>
        </div>
        <label class="fs-6 mx-2 fw-semibold text-light">Privacy</label>
        <div class="flex-grow-1"></div>
        <i class="fa-solid fa-chevron-right fa-xl" style="color: #FFF;"></i>
      </div>
    </a>

  </div>
</div>


<style scoped>

  #mobile-navbar{
    background-color: #618264;
    height: 80px;
  }

  li{
    width: 33.333%;
    height: auto;
  }

  .sidebar-nav ul .sidebar-item .sidebar-link {
    color: #000;
  }

  .sidebar-nav ul .sidebar-item .first-level .sidebar-item .sidebar-link.active {
    background-color: transparent!important;
    color: #D9D9D9!important;
  }

  .sidebar-nav ul .sidebar-item.selected>.sidebar-link,.sidebar-nav ul .sidebar-item.selected>.sidebar-link.active,.sidebar-nav ul .sidebar-item>.sidebar-link.active {
    background-color: #D9D9D9;
    font-weight: bold;
    color: #292D32

  }

</style>
