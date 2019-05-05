<?php
      require ('connection.php');

      $id = intval($_GET['id']);

      $stmt = $conn->prepare("SELECT staffname FROM taskprint WHERE rombak = '$id'; ");
      $stmt->execute();
      $stmt->bind_result($staffname);

     /* fetch values */
     while ($stmt->fetch()) 
      {
      $staffname2 = $staffname;
      }
      $stmt->close();
      $conn->close();
?>   

<?php
require ('connection.php');

$stmt = $conn->prepare("UPDATE custorder SET staffusername='$staffname2' WHERE statusorder='2' AND rombak='$id' ");
$stmt->execute();

if ($conn) {
    echo '<script language="javascript">';
    echo 'window.location.href="../administrator/orderstatus.php";';
    echo '</script>'; }
    else {
    echo '<script language="javascript">';
    echo 'alert("Assigned Failed!!");';
    echo '</script>'; }

$stmt->close();
$conn->close();
?>