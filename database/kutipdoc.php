<!-- set kan status customer to DONE -->
<?php
 require ('connection.php');
 
 $id = intval($_GET['id']);

$stmt = $conn->prepare("UPDATE custorder SET statusorder='5' WHERE rombak='$id' ");
$stmt->execute();

if ($conn) {
    echo '<script language="javascript">';
    echo 'alert("Document Taken");';
    echo 'window.location.href="../staff/complete.php";';
    echo '</script>'; }
    else {
    echo '<script language="javascript">';
    echo 'alert("Failed!!");';
    echo '</script>'; }

$stmt->close();
$conn->close();
?>

