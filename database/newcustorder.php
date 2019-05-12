<?php
	session_start();
    require ('connection.php');

    $id = intval($_GET['id']);

    // Select data dari users
	$stmt = $conn->prepare("SELECT warna, binding, transparent, amount, fileprint FROM custorder WHERE custorderID='$id' LIMIT 1");
	$stmt->execute();
	$stmt->bind_result($warna, $binding, $transparent, $amount, $fileprint);

	// Declare information
	while ($stmt->fetch()) 
	{
	$warna2 = $warna;
	$binding2 = $binding;
    $transparent2 = $transparent;
	$amount2 = $amount;
	$fileprint2 = $fileprint;
	}
	$stmt->close();
?>



<?php
// update into custorder
if(isset($_POST['submit'])){
	$warna3 = $_POST['warna'];
	$binding3 = $_POST['binding'];
	$transparent3 = $_POST['transparent'];
	$amount3 = $_POST['amount'];

	// document file
	$file = rand(1000,100000)."-".$_FILES['failorder']['name'];
	$file_loc = $_FILES['failorder']['tmp_name'];
	$file_size = $_FILES['failorder']['size'];
 	$file_type = $_FILES['failorder']['type'];
	$folder="../pdfupload/";
	 
	// upload pdf to path pdfupload
	move_uploaded_file($file_loc,$folder.$file);
  
	// prepare and bind
	$stmt = $conn->prepare("UPDATE custorder SET warna='$warna3', binding='$binding3', transparent='$transparent3', amount='$amount3', fileprint='$file', statusorder='0' WHERE custorderID=' $id' ");
	$stmt->execute();
						
	if($stmt)
			{
			echo '<script language="javascript">';
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