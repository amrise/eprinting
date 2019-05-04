<?php
 require ('connection.php');

 $id = intval($_GET['id']);

 $stmt = $conn->prepare("SELECT fileprint FROM custorder WHERE custorderID = '$id'; ");
 $stmt->execute();
 $stmt->bind_result($fileprint);

/* fetch values */
while ($stmt->fetch()) 
 {
     $pdf_content = $fileprint;
 }

 // create the unique name for pdf generated
 $fileName = time() . ".pdf";

 //download file from database and allows you to save in your system
 header("Content-type: application/pdf");
 header("Content-disposition: attachment; filename=".$fileName);
 print $pdf_content;

 $stmt->close();
 $conn->close();

?>