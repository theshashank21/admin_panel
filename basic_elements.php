<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
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
            <h3 class="page-title">Query Form</h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  Query Form
                </li>
              </ol>
            </nav>
          </div>
          <div class="row">

            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <form class="form-sample">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group col">
                          <label class="col-sm-3 col-form-label">First Name</label>
                          <div class="col-sm-9">
                            <input
                              type="text"
                              class="form-control border-secondary" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group col">
                          <label class="col-sm-3 col-form-label">Last Name</label>
                          <div class="col-sm-9">
                            <input
                              type="text"
                              class="form-control border-secondary" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group col">
                          <label class="col-sm-3 col-form-label">Gender</label>
                          <div class="col-sm-9">
                            <select class="form-select border-secondary">
                              <option>Male</option>
                              <option>Female</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group col">
                          <label class="col-sm-3 col-form-label">Date of Birth</label>
                          <div class="col-sm-9">
                            <input
                              class="form-control border-secondary"
                              placeholder="dd/mm/yyyy" />
                          </div>
                        </div>
                      </div>

                      <div class="form-group col-md-6">
                        <label class="mb-3 col-sm-3">File upload</label>
                        <input
                          type="file"
                          name="img[]"
                          class="file-upload-default border-secondary" />
                        <div class="input-group col-xs-12 col-sm-9">
                          <input
                            type="text"
                            class="form-control file-upload-info border-secondary"
                            disabled
                            placeholder="Upload Image" />
                          <span class="input-group-append">
                            <button
                              class="file-upload-browse btn btn-gradient-primary py-3"
                              type="button">
                              Upload
                            </button>
                          </span>
                        </div>
                      </div>

                      <div class="form-group col-md-6">
                        <label class="mb-3 col-sm-3">Checkboxes</label>
                        <div class="row ms-2">
                          <div class="form-check col-sm-3">
                            <label class="form-check-label">
                              <input
                                type="checkbox"
                                class="form-check-input" />
                              Option 1
                            </label>
                          </div>

                          <div class="form-check col-sm-3">
                            <label class="form-check-label">
                              <input
                                type="checkbox"
                                class="form-check-input" />
                              Option 2
                            </label>
                          </div>

                          <div class="form-check col-sm-3">
                            <label class="form-check-label">
                              <input
                                type="checkbox"
                                class="form-check-input" />
                              Option 3
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group col">
                          <label class="col-sm-3 col-form-label">Category</label>
                          <div class="col-sm-9">
                            <select class="form-select border-secondary">
                              <option>Category1</option>
                              <option>Category2</option>
                              <option>Category3</option>
                              <option>Category4</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group col">
                          <label class="col-sm-4 col-form-label">Membership</label>
                          <div class="row">
                            <div class="col-sm-3">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input
                                    type="radio"
                                    class="form-check-input"
                                    name="membershipRadios"
                                    id="membershipRadios1"
                                    value=""
                                    checked />
                                  Free
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input
                                    type="radio"
                                    class="form-check-input"
                                    name="membershipRadios"
                                    id="membershipRadios2"
                                    value="option2" />
                                  Professional
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col">
                        <label class="col-sm-3 col-form-label">Address</label>
                        <div class="col-12">
                          <input
                            type="textarea"
                            class="form-control border-secondary" />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group col">
                          <label class="col-sm-3 col-form-label">City</label>
                          <div class="col-sm-9">
                            <input
                              type="text"
                              class="form-control border-secondary" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group col">
                          <label class="col-sm-3 col-form-label">State</label>
                          <div class="col-sm-9">
                            <input
                              type="text"
                              class="form-control border-secondary" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group col">
                          <label class="col-sm-3 col-form-label">Postalcode</label>
                          <div class="col-sm-9">
                            <input
                              type="text"
                              class="form-control border-secondary" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group col">
                          <label class="col-sm-3 col-form-label">Country</label>
                          <div class="col-sm-9">
                            <select class="form-select border-secondary">
                              <option>America</option>
                              <option>Italy</option>
                              <option>Russia</option>
                              <option>Britain</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button
                      type="submit"
                      class="btn btn-gradient-primary me-2">
                      Submit
                    </button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.php -->
        <?php
        include('include/footer.php');
        ?>
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
</body>

</html>