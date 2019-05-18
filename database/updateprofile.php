<?php
 include('connection.php'); 

 // Select data dari users
 $stmt = $conn->prepare("SELECT username, fullname, usernumber, email FROM users WHERE username='".$_SESSION['username']."' AND password='".$_SESSION['password']."' LIMIT 1");
 $stmt->execute();
 $stmt->bind_result($usernama, $fullname, $usernumber, $email);

 while ($stmt->fetch()) 
 {
 $namacust = $fullname;
 $nomborcust = $usernumber;
 $usercust = $usernama;
 $email1 = $email;
 }
 $stmt->close();

 // update into custorder
 if(isset($_POST['submitprofile'])){
	$usernama1 = $_POST['username1'];
	$fullname1 = $_POST['fullname1'];
	$usernumber1 = $_POST['usernumber1'];
	$email2 = $_POST['email1'];
  
	// prepare and bind
	$stmt = $conn->prepare("UPDATE users SET username='$usernama1', fullname='$fullname1', usernumber='$usernumber1', email='$email2' WHERE username='".$_SESSION['username']."' AND password='".$_SESSION['password']."' ");
	$stmt->execute();
						
	if($stmt)
			{
			echo '<script language="javascript">';
			echo 'alert("Update Successfully");';
			echo '</script>'; 
			}else 
			
			{			
			echo '<script language="javascript">';
			echo 'alert("Your submission incorrect. Please try again.");';
			echo '</script>'; 
			} 
     	$stmt->close();
		$conn->close();
     }
?>