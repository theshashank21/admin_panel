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
  <title>Purple Admin - Registration</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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

    @keyframes slideDown {
      0% {
        top: -100px;
        /* Start above the viewport */
        opacity: 0;
      }

      100% {
        top: 20px;
        /* Slide into the visible area */
        opacity: 1;
      }
    }

    .custom-alert {
      animation: slideDown 0.5s ease-out;
      position: fixed;
      top: 20px;
      /* Final position just below the top */
      left: 50%;
      /* Center horizontally */
      transform: translateX(-50%);
      /* Offset the left 50% to center properly */
      width: 50%;
      /* You can adjust the width as per your requirement */
      z-index: 9999;
      opacity: 1;
    }
  </style>
</head>

<body>

  <div class="container-scroller">
    <?php
    include('include/navbar.php');
    ?>

    <?php
    // Check if a message is set in the session
    if (isset($_SESSION['message'])): ?>
      <div class="alert alert-<?= $_SESSION['color']; ?> alert-dismissible fade show custom-alert" role="alert">
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
      <?php
      include('include/sidebar.php');
      ?>

      <div class="content-wrapper d-flex align-items-center auth">


        <div class="row flex-grow">
          <div class="col-lg-10 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                <img src="assets/images/logo.svg">
              </div>
              <h4>Add New Users</h4>
              <h6 class="font-weight-light">You can add your new users here!!</h6>
              <form class="pt-3" action="backend/register_backend.php" method="post">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="ad_userid" id="exampleInputUsername1" placeholder="User ID" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="ad_username" id="exampleInputUsername1" placeholder="Name" required>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="ad_email" id="exampleInputEmail1" placeholder="Email" required>
                </div>
                <div class="form-group">
                  <input type="number" class="form-control form-control-lg" name="ad_phone" id="exampleInputUsername1" placeholder="Phone" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="ad_usertype" id="exampleInputUsername1" placeholder="User Type">
                </div>
                <div class="form-group">
                  <select class="form-select form-select-lg" id="exampleFormControlSelect2" name="ad_country" required>
                    <option>Country</option>
                    <option>United States of America</option>
                    <option>United Kingdom</option>
                    <option>India</option>
                    <option>Germany</option>
                    <option>Argentina</option>
                  </select>
                </div>
                <!-- <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input" required> I agree to all Terms & Conditions </label>
                  </div>
                </div> -->
                <div class="mt-3 d-grid gap-2">
                  <button type="submit" name="submit"
                    class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">Add User</button>
                </div>

              </form>
            </div>
          </div>
        </div>

      </div>

      <!-- content-wrapper ends -->
    </div>
    <?php
    include('include/footer.php');
    ?>

    <!-- page-body-wrapper ends -->
  </div>

  <?php
  include('include/login_register_script.php');
  ?>
  <!-- Add Bootstrap JS for alert functionality -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    var alertTimer = <?= $_SESSION['alert_timer']; ?>;
    // Automatically close the alert after 2 seconds (2000 ms)
    setTimeout(function() {
      var alertElement = document.querySelector('.alert');
      if (alertElement) {
        var alert = new bootstrap.Alert(alertElement);
        alert.close();
      }
    }, alertTimer); // 2000 milliseconds = 2 seconds
  </script>
  <?php
  include('script/basic_element_table_script.php');
  ?>

</body>

</html>