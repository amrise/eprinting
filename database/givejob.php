<?php 
require ('connection.php');


//insert into table taskprint
if(isset($_POST['assignjob'])){
	$staffname = $_POST['staffname'];

$stmt = $conn->prepare("INSERT INTO taskprint (staffname, fileprint, tarikh, warna, binding, transparent, amount, rombak, email) VALUES (?, ?, now(), ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssiiiiss", $staffname, $file1, $colour1, $binding1, $transparent1, $amount1, $rombak1, $email1);
$stmt->execute();

if ($conn) {
    echo '<script language="javascript">';
    echo 'alert("The task have been assigned successfully.");';
    echo 'window.location.href="../database/viewassign.php?id='."$rombak1".'  ";';
    echo '</script>'; }
    else {
    echo '<script language="javascript">';
    echo 'alert("Assign Error");';
    echo '</script>'; }

$stmt->close();
$conn->close();
}
?>