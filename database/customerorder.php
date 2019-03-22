<?php
	require ('connection.php');
	
	if(isset($_POST['submit'])){
	$jenis = $_POST['jenis'];
	$warna = $_POST['warna'];
	$keterangan = $_POST['keterangan'];
	$failprint = $_POST['failorder'];
	$statusorder = "0"; 
  
	// prepare and bind
	$stmt = $conn->prepare("INSERT INTO custorder (jenis, warna, keterangan, fileprint, statusorder) VALUES (?, ?, ?, ?, ?)");
	$stmt->bind_param("iisbi", $jenis, $warna, $keterangan, $failprint, $statusorder);
	$stmt->send_long_data(3, $failprint);
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