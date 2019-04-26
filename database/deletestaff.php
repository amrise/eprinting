<?php
require ('connection.php');

$id = intval($_GET['id']);

$stmt = $conn->prepare("DELETE FROM users WHERE userID = ?; ");
$stmt->bind_param("d", $id);
$stmt->execute();

if ($conn) {
    echo '<script language="javascript">';
    echo 'alert("Delete Successfully");';
    echo 'window.location.href="../administrator/managestaff.php";';
    echo '</script>';
    }
    else {
    echo '<script language="javascript">';
    echo 'alert("Delete Error");';
    echo '</script>'; }

$stmt->close();
$conn->close();

?>