<?php
      require ('connection.php');

      $id = intval($_GET['id']);

      $stmt = $conn->prepare("SELECT custorderID, binding, transparent FROM custorder WHERE custorderID = '$id'; ");
      $stmt->execute();
      $stmt->bind_result($custid, $binding, $transparent);

     /* fetch values */
     while ($stmt->fetch()) 
      {
      $custid1 = $custid;
      $binding1 = $binding;
      $transparent1 = $transparent;
      }
      $stmt->close();
      $conn->close();
?>      