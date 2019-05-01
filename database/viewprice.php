<?php
      require ('../database/connection.php');

      $id = intval($_GET['id']);
      if ($stmt = $conn->prepare("SELECT binding, transparent FROM custorder WHERE custorderID = '$id'; ")) 
      {
                          
     /* execute statement */
      $stmt->execute();

    /* bind result variables */
      $stmt->bind_result($binding, $transparent);

     /* fetch values */
     while ($stmt->fetch()) 
      {
            $binding1 = $binding;
            $transparent1 = $transparent;
      }
      $stmt->close();
      }
      $conn->close();
?>      