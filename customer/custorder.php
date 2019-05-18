<?php
  require ('../database/customerorder.php');
  include('../database/updateprofile.php'); 
  ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>UTeM e-Printing</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gray-900 sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
          
        </div>
        <div class="sidebar-brand-text mx-3">E-Printing</div>
      </a>

     
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Purchase
      </div>


      <!-- Nav Item - Charts -->
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-print"></i>
          <span>Booking Order</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item ">
        <a class="nav-link" href="statusorder.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Status Order</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

         

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

           

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><i><?php echo $_SESSION['username']; ?></i></span>
                <i class="fas fa-user"></i>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="historypay.php" data-toggle="modal" data-target="#profileModal">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="historypay.php">
                  <i class="fas fa-dollar-sign fa-sm fa-fw mr-2 text-gray-400"></i>
                 Payment
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

                <div class="card shadow mb-4">
                <div class="card-header p-3 bg-gray-900">
              <h6 class="m-0 font-weight-bold text-gray-100">Booking Order</h6>
            </div>
                  <div class="card-body">
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Purchased Date :</label>
                        <div class="col-md-9">
                          <p class="form-control-static">Today</p>
                        </div>
                      </div>


                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Colour :</label>
                        <div class="col-md-9 col-form-label">
                          <div class="form-check">
                            <input class="form-check-input" id="radio1" type="radio" value="1" name="warna" required>
                            <label class="form-check-label" for="radio1">Black and White</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" id="radio2" type="radio" value="2" name="warna" required>
                            <label class="form-check-label" for="radio2">Colour</label>
                          </div>
                        </div>
                      </div> 
                     

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Binding :</label>
                        <div class="col-md-9 col-form-label">
                          <div class="form-check">
                            <input class="form-check-input" id="radio1" type="radio" value="1" name="binding" required>
                            <label class="form-check-label" for="radio1">Binding Comb</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" id="radio2" type="radio" value="2" name="binding" required>
                            <label class="form-check-label" for="radio2">Binding Tape</label>
                          </div>
                        </div>
                      </div>


                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Transparent Cover :</label>
                        <div class="col-md-9 col-form-label">
                          <div class="form-check">
                            <input class="form-check-input" id="radio1" type="radio" value="1" name="transparent" required>
                            <label class="form-check-label" for="radio1">Front and Back</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" id="radio2" type="radio" value="2" name="transparent" required>
                            <label class="form-check-label" for="radio2">Front only</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" id="radio3" type="radio" value="3" name="transparent" required>
                            <label class="form-check-label" for="radio3">Didn't need</label>
                          </div>
                        </div>
                      </div>

                      

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="textfield-input">Amount to print :</label>
                        <div class="col-md-9">
                          <input type="number" class="form-control" id="textfield-input" name="amount" placeholder="1" min="1" required>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="file-input">Document file :</label>
                        <div class="col-md-9">
                          <input id="file-input" type="file" name="failorder" accept="application/pdf">
                        </div>
                      </div><br><br>

                      <button class="btn btn-sm btn-primary" type="submit" name="submit">
                      <i class="fa fa-dot-circle-o"></i> Submit</button>
                    <button class="btn btn-sm btn-danger" type="reset">
                      <i class="fa fa-ban"></i> Reset</button>

                    </form>
                  </div>
                  <div class="card-footer">

                  </div>
                </div>
            <!-- /.card shadow-->

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; E-Printing Syamsul Amri Bin Jamaludin B031710093</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Profile Modal-->
  <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Profile</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">

                      <form class="form-horizontal" action="" method="post">
                        
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="textfield-input">Full Name :</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="textfield-input" name="fullname1" value="<?php echo $namacust ?>" required>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="textfield-input">Username :</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="textfield-input" name="username1" value="<?php echo $usercust ?>" required>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="textfield-input">Phone No :</label>
                        <div class="col-md-9">
                          <input type="number" class="form-control" id="textfield-input" name="usernumber1" min="0" value="<?php echo $nomborcust ?>" required>
                        </div>
                      </div>   

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="textfield-input">Email :</label>
                        <div class="col-md-9">
                          <input type="email" class="form-control" id="textfield-input" name="email1" value="<?php echo $email1 ?>" required>
                        </div>
                      </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button class="btn btn-primary" type="submit" name="submitprofile">Update</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../database/logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
