<?php
	include('connection.php'); 
	
	if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$username = $_POST['username'];
 	$password = $_POST['password'];
  
	// prepare and bind
	$stmt = $conn->prepare("INSERT INTO users (email, name, password) VALUES (?, ?, ?)");
	$stmt->bind_param("sss", $email, $username, $password);

						
	if($stmt)
			{
			echo '<script language="javascript">';
			echo 'alert("Your registration are Successfully");';
			echo 'window.location.href="administrator/mainpage.php";';
			echo '</script>'; 
			}else 
			
			{			
			echo '<script language="javascript">';
			echo 'alert("Your registration are Fail");';
			echo 'window.location.href="register.php";';
			echo '</script>'; 
			} 

     	$stmt->close();
		$conn->close();
     }
	?>