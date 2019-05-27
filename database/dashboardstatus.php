<?php
      require ('connection.php');

      $stmt = $conn->prepare("SELECT COUNT(custorderID) FROM custorder WHERE statusorder='0' ");
      $stmt->execute();
      $stmt->bind_result($olist);

     /* fetch values */
     while ($stmt->fetch()) 
      {
      $olist1 = $olist;
      }
      $stmt->close();
      $conn->close();
?>      



<?php
      require ('connection.php');

      $stmt = $conn->prepare("SELECT COUNT(custorderID) FROM custorder WHERE statusorder='2' ");
      $stmt->execute();
      $stmt->bind_result($opayed);

     /* fetch values */
     while ($stmt->fetch()) 
      {
      $opayed1 = $opayed;
      }
      $stmt->close();
      $conn->close();
?>      





<?php
      require ('connection.php');

      $stmt = $conn->prepare("SELECT COUNT(custorderID) FROM custorder WHERE statusorder='4' ");
      $stmt->execute();
      $stmt->bind_result($odone);

     /* fetch values */
     while ($stmt->fetch()) 
      {
      $odone1 = $odone;
      }
      $stmt->close();
      $conn->close();
?>      