<?php
session_start();
require ('../database/viewprice.php');
require ('../database/givejob.php');
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

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3">E-Printing</div>
      </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item ">
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Customer
      </div>

      <!-- Nav Item - Tables -->
      <li class="nav-item ">
        <a class="nav-link" href="orderlist.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Order List</span></a>
      </li>

      <!-- Nav order list -->
      <li class="nav-item active">
        <a class="nav-link" href="orderstatus.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Order Payed</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Heading -->
      <div class="sidebar-heading">
        Staff
      </div>

      <!-- Nav register staff -->
      <li class="nav-item ">
        <a class="nav-link" href="registerstaff.php">
          <i class="fas fa-fw fa-user"></i>
          <span>Staff Registration</span></a>
      </li>

      <!-- Nav manage staff -->
      <li class="nav-item ">
        <a class="nav-link" href="managestaff.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Manage staff</span></a>
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

        <!-- Content Row -->
        <div class="row">


        <!-- Assign to staff -->
          <div class="col-lg-6">
          <div class="card shadow mb-4">
            <div class="card-header py-3 bg-gradient-info">
              <h6 class="m-0 font-weight-bold text-gray-100">Assign to Staff</h6>
            </div>
            <div class="card-body">

                    <form class="form-horizontal" action="" method="post">

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="textfield-input">Staff Name :</label>
                        <div class="col-md-9">

                        <?php
                        require ('../database/connection.php');

                        if ($stmt = $conn->prepare("SELECT fullname FROM users WHERE account='2' ")) 
                        {
                          
                          /* execute statement */
                          $stmt->execute();

                          /* bind result variables */
                          $stmt->bind_result($fullname);

                          echo "<select class='form-control' id='textfield-input' name='staffname' required>";

                          /* fetch values */
                          while ($stmt->fetch()) 
                          {
                            echo"<option value='$fullname'>$fullname</option>";
                          }
                          $stmt->close();

                          echo "</select>";
                          
                         }
                         $conn->close();
                          ?>
                        </div>
                      </div>
                      

                      <br><br>
                      <button class="btn btn-sm btn-primary" type="submit" name="assignjob">
                      <i class="fa fa-dot-circle-o"></i> Assign</button>
                    </form>
            </div>
          </div>
          </div>




           <!-- Content Column -->
           <div class="col-lg-6 mb-4">             
          <!-- Project Card Example -->
          <div class="card shadow mb-4">
                <div class="card-header py-3 bg-gradient-info">
                  <h6 class="m-0 font-weight-bold text-gray-100">Amount of Currently Task</h6>
                </div>
                <div class="card-body">

                       <?php
                        require ('../database/connection.php');

                        if ($stmt = $conn->prepare("SELECT staffusername, COUNT(custorderID) AS total, (COUNT(custorderID) / (SELECT COUNT(custorderID) FROM custorder WHERE statusorder='2')) * 100 AS percentage FROM custorder WHERE statusorder='2' GROUP BY staffusername ")) 
                        {
                          
                          $stmt->execute();
                          $stmt->bind_result($staffusername, $total, $percentage);

                          /* fetch values */
                          while ($stmt->fetch()) 
                          {
                            echo"
                            <h4 class='small font-weight-bold'> $staffusername <span class='float-right'> $total </span></h4>
                            <div class='progress mb-4'>
                              <div class='progress-bar bg-info' role='progressbar' style='width: $percentage%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'></div>
                            </div>
                            ";
                          }
                          $stmt->close();
                          
                         }
                         $conn->close();
                          ?>

                </div>
              </div>
             </div>             

            <!-- End of row -->
            </div>

        </div>
        <!-- End of Page Content -->

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
