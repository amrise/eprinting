<?php
  session_start();
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
  <link href="css/labels.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  

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
      <li class="nav-item ">
        <a class="nav-link" href="custorder.php">
          <i class="fas fa-fw fa-print"></i>
          <span>Booking Order</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="#">
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
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#profileModal">
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
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3 bg-gray-900">
              <h6 class="m-0 font-weight-bold text-gray-100">Status Order</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Colour</th>
                      <th>File</th>
                      <th>Date</th>
                      <th>Status *Clickable</th>
                      <th>Manage</th>
                    </tr>
                  </thead>
                  <tfoot>
                     <tr>
                      <th>Colour</th>
                      <th>File</th>
                      <th>Date</th>
                      <th>Status</th>
                      <th>Manage</th>
                    </tr>
                  </tfoot>
                  <tbody>
                   
                    <?php
                      require ('../database/connection.php');

                      if ($stmt = $conn->prepare("SELECT custorderID, warna, fileprint, tarikh, statusorder FROM custorder WHERE custusername='".$_SESSION['username']."' ")) 
                        {
                          
                          /* execute statement */
                          $stmt->execute();

                          /* bind result variables */
                          $stmt->bind_result($custid, $colour, $file, $date, $status);

                          /* fetch values */
                          while ($stmt->fetch()) 
                          {
                              echo "
                                <tr>
                                  <td>";
                                  
                                  if( $colour  == 1)
                                   {
                                     echo "Black and White";
                                   } else
                                   {
                                     echo "Colour";
                                   }  ?>
                                  </td>
                                  <td><a href="../pdfupload/<?php echo $file ?>" target="_blank"> <i class="fas fa-file-pdf"></i></a></td>
                                  <td><?php echo $date ?></td>
                                  <td> <?php
                                  
                                  if($status == 0)
                                  {
                                    echo ' <span class="label warning">Pending</span>  ';
                                  } 
                                  else if($status == 1)
                                  {
                                    echo ' <span class="label danger">Reject</span>  ';
                                  } 
                                  else if($status == 2)
                                  {
                                    echo ' <span class="label warning">In Process</span> ';
                                  } 
                                  else if($status == 3)
                                  {
                                    echo ' <a href="payorder.php?id=' . " $custid " . ' " class="label info"><span class="text">Pay NOW!!</span></a>  ';
                                  } 
                                  else
                                  {
                                    echo ' <span class="label success">Done</span>  ';
                                  }       ?>
                                  </td>
                                  <td> <?php
                                  if($status == 0 )
                                  {
                                    echo ' <a href="neworder.php?id=' . "$custid" . ' " class="btn btn-primary btn-icon-split">
                                    <span class="text">Edit</span></a>
                                    <a href="../database/deleteorder.php?id=' . "$custid" . ' " class="btn btn-danger btn-circle">
                                    <i class="fas fa-trash"></i></a>  ';
                                  } else if($status == 1 )
                                  {
                                    echo ' <a href="neworder.php?id=' . "$custid" . ' " class="btn btn-primary btn-icon-split">
                                    <span class="text">Edit</span></a>
                                    <a href="../database/deleteorder.php?id=' . "$custid" . ' " class="btn btn-danger btn-circle">
                                    <i class="fas fa-trash"></i></a>  ';
                                  } else if($status == 3 )
                                  {
                                    echo ' <a href="neworder.php?id=' . "$custid" . ' " class="btn btn-primary btn-icon-split">
                                    <span class="text">Edit</span></a>
                                    <a href="../database/deleteorder.php?id=' . "$custid" . ' " class="btn btn-danger btn-circle">
                                    <i class="fas fa-trash"></i></a>  ';
                                  } 
                                  ?>
                                  </td>
                                </tr>
                                <?php
                          }
                          $stmt->close();
                        }
                          $conn->close();
                      ?>      

                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <u><b>IMPORTANT</b>. Please read carefully for each status.</u><br><br>
          1. <span class="label warning">Pending</span> = <b>Please wait your booking order from our reply.</b> <br><br>
          2. <span class="label info">Pay NOW!!</span> = <b>Please click button Pay NOW!! to make your payment. We will process your order after payment have been made.</b> <br><br>
          3. <span class="label danger">Reject</span> = <b>Your document have a problem that we can't proceed to print. Please resubmit your order.</b> <br><br>
          4. <span class="label warning">In Process</span> = <b>We are in processing your printing order. It may takes 1 or 2 days. </b> <br><br>
          5. <span class="label success">Done</span> = <b>Your order is complete. Please take your document at printing centre. TQ!</b> <br><br><br>

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
                        <label class="col-md-3 col-form-label" for="textfield-input">Telephone No :</label>
                        <div class="col-md-9">
                          <input type="number" class="form-control" id="textfield-input" name="usernumber1" min="0" value="<?php echo $nomborcust ?>" required>
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
