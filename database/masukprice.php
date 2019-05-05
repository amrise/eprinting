<?php
require ('connection.php');

if(isset($_POST['masukharga'])){
    $harga = $_POST['harga'];

$stmt = $conn->prepare("UPDATE custorder SET price='$harga', statusorder='3' WHERE custorderID = '$custid1'; ");
$stmt->execute();

if ($conn) {
    echo '<script language="javascript">';
    echo 'alert("Price has been submitted");';
    echo 'window.location.href="orderlist.php";';
    echo '</script>'; }
    else {
    echo '<script language="javascript">';
    echo 'alert("Submit error");';
    echo '</script>'; }

$stmt->close();
$conn->close();
    }
?>