<?php
	session_start();
	require ('connection.php');

	// Select data dari users
	$stmt = $conn->prepare("SELECT username, fullname, usernumber FROM users WHERE username='".$_SESSION['username']."' LIMIT 1");
	$stmt->execute();
	$stmt->bind_result($username, $fullname, $usernumber);

	// Declare information
	while ($stmt->fetch()) 
	{
	$namacust = $fullname;
	$nomborcust = $usernumber;
	}
	$stmt->close();

	// insert into custorder
	if(isset($_POST['submit'])){
	$warna = $_POST['warna'];
	$binding = $_POST['binding'];
	$transparent = $_POST['transparent'];
	$amount = $_POST['amount'];
	$failprint = $_POST['failorder'];
	$statusorder = "0"; 
  
	// prepare and bind
	$stmt = $conn->prepare("INSERT INTO custorder (warna, binding, transparent, amount, fileprint, statusorder, tarikh, nama, phone) VALUES (?, ?, ?, ?, ?, ?, now(), ?, ?)");
	$stmt->bind_param("iiiibisi", $warna, $binding, $transparent, $amount, $failprint, $statusorder, $namacust, $nomborcust);
	$stmt->send_long_data(4, $failprint);
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