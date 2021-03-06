<?php
session_start();
require ('../database/connection.php');
require ('../database/chartcolour.php');
require ('../database/dashboardstatus.php');
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

  <!-- canvasjs -->
  <script src="vendor/analysis/canvasjs.min.js"></script>


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
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Customer
      </div>

      <!-- Nav order list -->
      <li class="nav-item ">
        <a class="nav-link" href="orderlist.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Order List</span></a>
      </li>

      <!-- Nav order list -->
      <li class="nav-item ">
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

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>



          <!-- Content Row -->
          <div class="row">

            <!--  Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Order List Request</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $olist1 ?></div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!--  Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Order Payed Request</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $opayed1 ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

           <!--  Card Example -->
           <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Finished Product</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $odone1 ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-folder-open fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- End row -->
          </div>


           <!-- Area Chart of monthly sales -->
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-gradient-info">
                  <h6 class="m-0 font-weight-bold text-gray-100">Earnings Overview, Total Sales per Month</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                  <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                  </div>
                </div>
              </div><br><br>


          <!-- Column chart by colour per month -->
          <div class="card shadow mb-4">
            <div class="card-header py-3 bg-gradient-info">
              <h6 class="m-0 font-weight-bold text-gray-100">Amount Colour Print per Month</h6>
            </div>
            <div class="card-body">
              <div class="chart-area">
              <div id="chartContainer1" style="height: 370px; width: 100%;"></div>
              </div>
            </div>
          </div><br><br>

          

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

  <!-- Flot Charts JavaScript -->
  <script src="vendor/flot/excanvas.min.js"></script>
  <script src="vendor/flot/jquery.flot.js"></script>
  <script src="vendor/flot/jquery.flot.pie.js"></script>
  <script src="vendor/flot/jquery.flot.resize.js"></script>
  <script src="vendor/flot/jquery.flot.time.js"></script>
  <script src="vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>
  <script src="vendor/data/flot-data.js"></script>

  <!-- chart total sales per month -->
  <script type="text/javascript">
        $(document).ready(function () {

            $.getJSON("../database/chartsales.php", function (result) {

                var chart = new CanvasJS.Chart("chartContainer", {
                    axisX: {
                        title: "Month"
                    },
                    axisY: {
                        prefix: "RM "
                    },
                    data: [
                        {
                            dataPoints:result,
                            type:"area",
                            yValueFormatString: "#RM,##0.00",
                            indexLabel: "({y})",
                        }
                    ]
                });

                chart.render();
            });
        });
    </script>


    <!-- chart total colour use per month -->
  <script type="text/javascript">
        $(document).ready(function () {

                var chart = new CanvasJS.Chart("chartContainer1", {
                    animationEnabled: true,
                    axisY: {
                        title: "Colour Print",
                        titleFontColor: "#4F81BC",
                        lineColor: "#4F81BC",
                        labelFontColor: "#4F81BC",
                        tickColor: "#4F81BC"
                    },
                    axisY2: {
                        title: "Black Print",
                        titleFontColor: "#C0504E",
                        lineColor: "#C0504E",
                        labelFontColor: "#C0504E",
                        tickColor: "#C0504E"
                    },
                    toolTip: {
                        shared: true
                    },
                    legend: {
                        cursor:"pointer",
                        itemclick: toggleDataSeries
                    },
                    data: [
                        {
                            dataPoints:<?php echo json_encode($data_pointsclr, JSON_NUMERIC_CHECK); ?>,
                            type:"column",
                            name: "Print Colour",
                            legendText: "Print Colour",
                            showInLegend: true
                        },
                        {
                            dataPoints:<?php echo json_encode($data_pointsclr1, JSON_NUMERIC_CHECK); ?>,
                            type:"column",
                            name: "Print Black and White",
                            legendText: "Print Black and White",
                            axisYType: "secondary",
                            showInLegend: true
                        }
                    ]
                });

                chart.render();

  function toggleDataSeries(e) {
	    if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		      e.dataSeries.visible = false;
	      }
	    else {
		      e.dataSeries.visible = true;
	          }
	    chart.render();
      }
    });
    </script>

</body>

</html>


