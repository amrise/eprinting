<?php 

require ('connection.php');

if(isset($_POST['submit'])){
	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$usernumber = $_POST['usernumber'];
    $password = md5($_POST['password']);
    $akaun = "0";

$stmt = $conn->prepare("INSERT INTO users (fullname, username, usernumber, password, account) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("ssisi", $fullname, $username, $usernumber, $password, $akaun);
$stmt->execute();

if ($conn) {
    echo '<script language="javascript">';
    echo 'alert("Your account have been created");';
    echo 'window.location.href="index.php";';
    echo '</script>'; }
    else {
    echo '<script language="javascript">';
    echo 'alert("Registration Error");';
    echo '</script>'; }

$stmt->close();
$conn->close();
    }
?>