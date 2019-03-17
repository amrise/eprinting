<!DOCTYPE html>


<html lang="en">

  <head>
  <?php include('style.php'); ?>
  </head>

  
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
      
      <a class="navbar-brand" >
        <img  src="img/brand/eprinting.jpg" width="150" height="50" >
        
      </a>
      <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <ul class="nav navbar-nav ml-auto">
        
        
    
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <img class="img-avatar" src="img/avatars/contact.png" alt="admin@bootstrapmaster.com">
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header text-center">
              <strong>Account</strong>
            </div>
           
            <a class="dropdown-item" href="#">
              <i class="fa fa-user"></i> Profile</a>
            
            <a class="dropdown-item" href="#">
              <i class="fa fa-usd"></i> Payments
              <span class="badge badge-secondary"></span>
            </a>

            <a class="dropdown-item" href="#">
              <i class="fa fa-lock"></i> Logout</a>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
        <span class="navbar-toggler-icon"></span>
      </button>
    </header>

    
    <div class="app-body">

      <!-- SideBar-->
      <div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
            
          <li class="nav-item">
            <a class="nav-link" href="mainpage.php">
            <i class="nav-icon icon-note"></i> Booking Order</a>
          </li>

          </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
      </div>

    </div>



    <!-- CoreUI and necessary plugins-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/pace.min.js"></script>
    <script src="js/perfect-scrollbar.min.js"></script>
    <script src="js/coreui.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="js/colors.js"></script>
  </body>
</html>
