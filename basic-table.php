<?php
require('common/master.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Purple Admin - Form</title>
  <!-- plugins:css -->
  <link
    rel="stylesheet"
    href="assets/vendors/mdi/css/materialdesignicons.min.css" />
  <link
    rel="stylesheet"
    href="assets/vendors/ti-icons/css/themify-icons.css" />
  <link
    rel="stylesheet"
    href="assets/vendors/css/vendor.bundle.base.css" />
  <link
    rel="stylesheet"
    href="assets/vendors/font-awesome/css/font-awesome.min.css" />
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link
    rel="stylesheet"
    href="assets/vendors/select2/select2.min.css" />
  <link
    rel="stylesheet"
    href="assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <!-- End layout styles -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />

  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">

</head>

<body>

  <div class="container-scroller">
    <!-- partial:partials/_navbar.php -->
    <?php
    include('include/navbar.php');
    ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.php -->
      <?php
      include('include/sidebar.php');
      ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">Tables</h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  User Listing
                </li>
              </ol>
            </nav>
          </div>
          <div class="row">

            <?php
            // Assuming $conn is your PDO connection
            $listingsql = "SELECT * FROM tbl_purplefree_user";
            $stmt = $conn->prepare($listingsql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (count($result) > 0) {
              echo "<div class='col-12 grid-margin'>
    <div class='card'>
      <div class='card-body'>
        <h2 class='mb-3'>Users Table</h2>
        <table id='example' class='display table' style='width:100%'>
          <thead>
            <tr>
              <th>User ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>User Type</th>
              <th>Country</th>
              <th>Action</th>
            </tr>
          </thead>";
              echo "<tbody class='fs-5'>";

              foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $row["user_id"] . "</td>";
                echo "<td>" . $row["user_name"] . "</td>";
                echo "<td>" . $row["user_email"] . "</td>";
                echo "<td>" . $row["user_phone"] . "</td>";
                echo "<td>" . $row["user_type"] . "</td>";
                echo "<td>" . $row["user_country"] . "</td>";
                echo "<td>";
                echo "<a href='edit.php?id=" . $row['user_id'] . "' type='button' class='btn btn-outline-primary btn-sm'>📝Edit</a><br><br>";
                // Uncomment the delete action if needed
                // echo "<a href='delete.php?id=" . $row['user_id'] . "' onclick='return confirm(\"Are you sure you want to delete this item?\");' type='button' class='btn btn-outline-danger btn-sm'>📥Delete</a>";
                echo "</td>";
                echo "</tr>";
              }

              echo "</tbody>";
              echo "</table>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
            } else {
              echo "<center><h5>Add some users to featured here 📅</center></h5>";
            }
            ?>



          </div>
          <div class="footer mt-6">
            <?php
            include('include/footer.php');
            ?>
          </div>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <?php
    include('script/basic_element_table_script.php');
    ?>

    <?php
    include('script/basic_table_script.php');
    ?>
</body>

</html>