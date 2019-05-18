<?php 
require ('database/custregister.php');
?>

<head>

<title>E-Printing</title>

<link href="css/login.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">

</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign Up</h5>
            <form class="form-signin" method="post">

              <div class="form-label-group">
                <input type="text" id="fullname" class="form-control" name="fullname" placeholder="Full Name" required autofocus>
                <label for="fullname">Full Name</label>
              </div>

              <div class="form-label-group">
                <input type="text" id="username" class="form-control" name="username" placeholder="Username" required>
                <label for="username">Username</label>
              </div>

              <div class="form-label-group">
                <input type="email" id="email" class="form-control" name="email" placeholder="Email" required>
                <label for="email">Email</label>
              </div>

              <div class="form-label-group">
                <input type="number" id="nombor" class="form-control" name="usernumber"  min="0" placeholder="Telephone No" pattern=".{10,}" title="Please put specific number!" required>
                <label for="nombor">Telephone No</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                <label for="inputPassword">Password</label>
              </div>

              <br>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submit" >Sign up</button>
              <br>
              <p>If you have an account. Please click <a href="login.php">Here!!!</a><p>
          
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>

</body>