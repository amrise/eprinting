<?php
 require ('connection.php');
 
 $id = intval($_GET['id']);

$stmt = $conn->prepare("UPDATE custorder SET statusorder='4' WHERE rombak='$id' ");
$stmt->execute();
$stmt->close();
$conn->close();
?>



<?php
 require ('connection.php');

$stmt = $conn->prepare("UPDATE taskprint SET statusprint='1' WHERE rombak='$id' ");
$stmt->execute();

if ($conn) {
    echo '<script language="javascript">';
    echo 'window.location.href="../staff/printinglist.php";';
    echo 'alert("Successfully submit!!");';
    echo '</script>'; }
    else {
    echo '<script language="javascript">';
    echo 'alert("Submit Failed!!");';
    echo '</script>'; }

$stmt->close();
$conn->close();
?>