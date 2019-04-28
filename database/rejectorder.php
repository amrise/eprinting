<?php
require ('connection.php');

$id = intval($_GET['id']);
echo $id;
$stmt = $conn->prepare("UPDATE custorder SET statusorder='1' WHERE custorderID = '$id'; ");
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

?>