<?php
require ('connection.php');

$id = intval($_GET['id']);

$stmt = $conn->prepare("DELETE FROM custorder WHERE custorderID = '$id'; ");
$stmt->execute();

if ($conn) {
    echo '<script language="javascript">';
    echo 'alert("You Have Delete Your Order");';
    echo 'window.location.href="../customer/statusorder.php";';
    echo '</script>';
    }
    else {
    echo '<script language="javascript">';
    echo 'alert("Delete Error");';
    echo '</script>'; }

$stmt->close();
$conn->close();

?>