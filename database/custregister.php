<?php 

require ('connection.php');

if(isset($_POST['submit'])){
	$fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $usernumber = $_POST['usernumber'];
    $password = md5($_POST['password']);
    $akaun = "0";


$stmt = $conn->prepare("INSERT INTO users (fullname, username, usernumber, password, account, email) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssis", $fullname, $username, $usernumber, $password, $akaun, $email);
$stmt->execute();

if ($conn) {
    echo '<script language="javascript">';
    echo 'alert("Your account have been created. Please login.");';
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