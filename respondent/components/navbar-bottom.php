<nav class="navbar navbar-expand-lg fixed-bottom sidebar-nav" id="mobile-navbar">
  <ul id="sidebarnav" class="nav nav-pills w-100 mx-2">
    <li class="nav-item sidebar-item text-center my-auto">
      <a class="nav-link sidebar-link text-decoration-none text-secondary position-relative" data-bs-toggle="modal" data-bs-target="#notif-modal">
        <i class="fa-solid fa-bell fa-xl">
          <span class="position-absolute top-0 start-50 translate-middle badge rounded-pill bg-danger border border-light ms-3">
            <label style="font-size: 13px;">1</label>
          </span>
        </i>
      </a>
    </li>
    <li class="nav-item sidebar-item text-center my-auto">
      <a class="nav-link sidebar-link text-decoration-none text-secondary" href="./home.php" aria-expanded="false">
        <i class="fa-solid fa-house fa-xl"></i>
      </a>
    </li>
    <li class="nav-item sidebar-item text-center my-auto">
      <a class="nav-link sidebar-link text-decoration-none text-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#off-nav1" aria-controls="staticBackdrop">
        <i class="fa-solid fa-bars fa-xl"></i>
      </a>
    </li>
  </ul>
</nav>

 <!-- TOP NAVBAR -->
 <?php include '../respondent/components/navbar-offcan.php'; ?>
 
<style scoped>
#mobile-navbar {
    background-color: #8DA48F;
    height: 80px;
}

.nav-item {
    width: 33.333%;
    height: auto;
}

.sidebar-nav ul .sidebar-item .sidebar-link {
    color: #000;
}

.sidebar-nav ul .sidebar-item .first-level .sidebar-item .sidebar-link.active {
    background-color: transparent !important;
    color: #D9D9D9 !important;
}

.sidebar-nav ul .sidebar-item.selected > .sidebar-link,
.sidebar-nav ul .sidebar-item.selected > .sidebar-link.active,
.sidebar-nav ul .sidebar-item > .sidebar-link.active {
    background-color: #D9D9D9;
    font-weight: bold;
    color: #292D32;
}
</style>



