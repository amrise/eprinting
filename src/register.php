<?php include ('database/registercust.php'); ?>

<head>
<link href="css/style.css" rel="stylesheet">
<link href="css/login.css" rel="stylesheet">
</head>

<body class="app header-fixed">

    <header class="app-header navbar">
      
      <a class="navbar-brand" >
        <img  src="img/brand/eprinting.jpg" width="150" height="50" >
      </a>
    </header>

  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Register</h5>
            <form class="form-signin" method="post">

              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus>
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="text" id="inputName" class="form-control" name="username" placeholder="Username" required>
                <label for="inputName">Username</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>

              <!-- <div class="form-label-group">
                <input type="password" id="inputCPassword" class="form-control" placeholder="Password" required>
                <label for="inputCPassword">Confirm Password</label>
              </div>--> 

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submit" >Register</button>             
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  


  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>

</body>


