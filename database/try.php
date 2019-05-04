<?php
include "connection.php";

$query = "SELECT * FROM custorder WHERE custorderID = '42';";
$result = mysqli_query($conn,$query) or die('Error, query failed');
$row = mysqli_fetch_array($result);

$name = $row['nama']; $format = "pdf"; $file = $row['fileprint'];


// Use a prepared statement in production to avoid SQL injection;
// we can get away with this here because we're the only ones who
// are going to use this script.


header("Content-type: application/pdf");
header("Content-disposition: attachment; filename=$name.$format");
ob_clean();
flush();
echo $file;
mysqli_close($conn);
exit;

?>