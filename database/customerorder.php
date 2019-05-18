<?php
	session_start();
	require ('connection.php');

	// Select data dari users
	$stmt = $conn->prepare("SELECT username, fullname, usernumber, email FROM users WHERE username='".$_SESSION['username']."' LIMIT 1");
	$stmt->execute();
	$stmt->bind_result($usernama, $fullname, $usernumber, $email);

	// Declare information
	while ($stmt->fetch()) 
	{
	$namacust = $fullname;
	$nomborcust = $usernumber;
	$usercust = $usernama;
	$email1 = $email;
	}
	$stmt->close();

	// insert into custorder
	if(isset($_POST['submit'])){
	$warna = $_POST['warna'];
	$binding = $_POST['binding'];
	$transparent = $_POST['transparent'];
	$amount = $_POST['amount'];
	$statusorder = "0"; 
	$rombak = rand(1000,100000);

	// document file
	$file = rand(1000,100000)."-".$_FILES['failorder']['name'];
	$file_loc = $_FILES['failorder']['tmp_name'];
	$file_size = $_FILES['failorder']['size'];
 	$file_type = $_FILES['failorder']['type'];
	$folder="../pdfupload/";
	 
	// upload pdf to path pdfupload
	move_uploaded_file($file_loc,$folder.$file);
  
	// prepare and bind
	$stmt = $conn->prepare("INSERT INTO custorder (warna, binding, transparent, amount, fileprint, statusorder, tarikh, nama, phone, custusername, rombak, email) VALUES (?, ?, ?, ?, ?, ?, now(), ?, ?, ?, ?, ?)");
	$stmt->bind_param("iiiisisssss", $warna, $binding, $transparent, $amount, $file, $statusorder, $namacust, $nomborcust, $usercust, $rombak, $email1);
	$stmt->execute();
						
	if($stmt)
			{
			echo '<script language="javascript">';
			echo 'alert("Your order have been made");';
			echo 'window.location.href="statusorder.php";';
			echo '</script>'; 
			}else 
			
			{			
			echo '<script language="javascript">';
			echo 'alert("Your submission incorrect. Please try again.");';
			echo 'window.location.href="custorder.php";';
			echo '</script>'; 
			} 
     	$stmt->close();
		$conn->close();
     }
	?> 