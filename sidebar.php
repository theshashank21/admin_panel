<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="nav-profile-image">
          <img src="assets/images/faces/face1.jpg" alt="profile" />
          <span class="login-status online"></span>
          <!--change to offline or busy as needed-->
        </div>
        <div class="nav-profile-text d-flex flex-column">
          <!-- <span class="font-weight-bold mb-2"><?php echo $admin_username; ?></span> -->
          <span class="font-weight-bold mb-2">Karlos Monte</span>
          <!-- <span class="text-secondary text-small"><?php echo $user_role; ?></span> -->
          <span class="text-secondary text-small">Product Manager</span>
        </div>
        <i
          class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php">
        <span class="menu-title">Dashboard</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>

    <li class="nav-item">
      <a
        class="nav-link"
        data-bs-toggle="collapse"
        href="#forms"
        aria-expanded="false"
        aria-controls="forms">
        <span class="menu-title">Forms</span>
        <i class="mdi mdi-format-list-bulleted menu-icon"></i>
      </a>
      <div class="collapse" id="forms">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="basic_elements.php">Query Form</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#tables-menu" aria-expanded="false" aria-controls="tables-menu">
        <span class="menu-title">Tables</span>
        <i class="mdi mdi-table-large menu-icon"></i>
      </a>
      <div class="collapse" id="tables-menu">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="basic-table.php">User Listing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">Add User</a>
          </li>
        </ul>
      </div>
    </li>


    <li class="nav-item">
      <a class="nav-link" href="login.php">
        <span href="login.php" class="menu-title">Logout</span>
        <i class="mdi mdi-power menu-icon"></i>
      </a>
    </li>
  </ul>
</nav>