<?php
require ('connection.php');

if ($stmt = $conn->prepare("SELECT custorderID, warna, fileprint, tarikh FROM custorder WHERE statusorder='0 && 1' ")) 
    {
                          
     /* execute statement */
     $stmt->execute();

     /* bind result variables */
      $stmt->bind_result($orderid, $colour, $file, $date);

      while ($stmt->fetch()) 
      {
            $oderid= $orderid;
            $kaler= $colour;
            $fail= $file;
            $tarikh = $date;
      }
    }
?>