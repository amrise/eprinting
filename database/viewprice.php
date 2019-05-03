<?php
      require ('connection.php');

      $id = intval($_GET['id']);

      $stmt = $conn->prepare("SELECT custorderID, warna, binding, transparent, price, nama FROM custorder WHERE custorderID = '$id'; ");
      $stmt->execute();
      $stmt->bind_result($custid, $colour, $binding, $transparent, $price, $nama);

     /* fetch values */
     while ($stmt->fetch()) 
      {
      $custid1 = $custid;
      $colour1 = $colour;
      $binding1 = $binding;
      $transparent1 = $transparent;
      $price1 = $price;
      $nama1 = $nama;
      }
      $stmt->close();
      $conn->close();
?>      