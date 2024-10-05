<?php
ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Purple Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .custom-alert {
      position: fixed;
      /* Make it fixed on the screen */
      top: 20px;
      /* Distance from the top */
      left: 50%;
      /* Center horizontally */
      transform: translateX(-50%);
      /* Adjust horizontal centering */
      z-index: 1050;
      /* Ensure it appears above other content */
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
      /* 3D shadow effect */
      border-radius: 10px;
      /* Optional: rounded corners */
    }
  </style>
</head>

<body>
  <div class="container-scroller">

    <?php
    // Check if a message is set in the session
    if (isset($_SESSION['message'])): ?>
      <div class="alert alert-danger alert-dismissible fade show w-50 m-auto custom-alert" role="alert">
        <?= $_SESSION['message']; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php
      // Unset the session message after displaying it
      unset($_SESSION['message']);
    endif;
    ?>


    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row flex-grow">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                <img src="assets/images/logo.svg">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" action="backend/login_backend.php" method="post">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" name="ad_email" placeholder="Email" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="ad_pass" placeholder="Password" required>
                </div>
                <div class="mt-3 d-grid gap-2">
                  <button type="submit" name="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted" style="margin-left: 2px;">
                      <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                  </div>
                  <a href="#" class="auth-link text-primary">Forgot password?</a>
                </div>
                <div class="mb-2 d-grid gap-2">
                  <button onmouseenter="a()" onmouseleave="c()" id="b" type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="mdi mdi-facebook me-2"></i>Connect using facebook </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <?php
  include('include/login_register_script.php');
  ?>
  <!-- Add Bootstrap JS for alert functionality -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function a() {
      document.getElementById("b").style.color = "white";
    }

    function c() {
      document.getElementById("b").style.color = "black";
    }
  </script>
</body>

</html>