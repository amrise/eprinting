<?php
      require ('connection.php');

      $id = intval($_GET['id']);

      $stmt = $conn->prepare("SELECT custorderID, warna, binding, transparent, price, nama, fileprint, amount, rombak, email FROM custorder WHERE custorderID = '$id'; ");
      $stmt->execute();
      $stmt->bind_result($custid, $colour, $binding, $transparent, $price, $nama, $file, $amount, $rombak, $email);

     /* fetch values */
     while ($stmt->fetch()) 
      {
      $custid1 = $custid;
      $colour1 = $colour;
      $binding1 = $binding;
      $transparent1 = $transparent;
      $price1 = $price;
      $nama1 = $nama;
      $file1 = $file;
      $amount1 = $amount;
      $rombak1 = $rombak;
      $email1 = $email;
      }
      $stmt->close();
      $conn->close();
?>      