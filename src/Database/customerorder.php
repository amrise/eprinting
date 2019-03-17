<?php
	include('connection.php'); 
	
	if(isset($_POST['submit'])){
	$jenis = $_POST['jenis'];
	$warna = $_POST['warna'];
	$keterangan = $_POST['keterangan'];
	$failprint = $_POST['failorder'];
	$statusorder = "In process"; 
  
	// prepare and bind
	$stmt = $conn->prepare("INSERT INTO custorder (jenis, warna, keterangan, fileprint, statusorder) VALUES (?, ?, ?, ?, ?)");
	$stmt->bind_param("iisbs", $jenis, $warna, $keterangan, $failprint, $statusorder);
	$stmt->send_long_data(3, $failprint);
	$stmt->execute();

						
	if($stmt)
			{
			echo '<script language="javascript">';
			echo 'alert("Your order have been made");';
			echo 'window.location.href="master.php";';
			echo '</script>'; 
			}else 
			
			{			
			echo '<script language="javascript">';
			echo 'alert("Your order are Fail");';
			echo 'window.location.href="mainpage.php";';
			echo '</script>'; 
			} 

     	$stmt->close();
		$conn->close();
     }
	?>