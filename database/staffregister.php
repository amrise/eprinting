<?php 

require ('connection.php');

if(isset($_POST['submit'])){
	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
    $usernumber = $_POST['usernumber'];
    $password = md5("printing123");
    $akaun = "2";


$stmt = $conn->prepare("INSERT INTO users (fullname, username, usernumber, password, account) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("ssssi", $fullname, $username, $usernumber, $password, $akaun);
$stmt->execute();

if ($conn) {
    echo '<script language="javascript">';
    echo 'alert("Staff account have been created.");';
    echo 'window.location.href="managestaff.php";';
    echo '</script>'; }
    else {
    echo '<script language="javascript">';
    echo 'alert("Registration Error");';
    echo '</script>'; }

$stmt->close();
$conn->close();
    }
?>