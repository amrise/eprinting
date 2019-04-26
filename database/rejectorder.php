<?php
require ('connection.php');

if(isset($_POST['rejectorder'])){
$stmt = $conn->prepare("UPDATE custorder SET statusorder='1' WHERE custorderID='".$_SESSION['id']."' LIMIT 1");
$stmt->execute();

// if ($conn) {
//     echo '<script language="javascript">';
//     echo 'window.location.href="../administrator/orderlist.php";';
//     echo '</script>';
//     }
//     else {
//     echo '<script language="javascript">';
//     echo 'alert("Delete Error");';
//     echo '</script>'; }

$stmt->close();
$conn->close();
}
?>