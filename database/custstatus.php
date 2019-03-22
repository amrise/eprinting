<?php
  require ('connection.php');

  $stmt = $conn->prepare("SELECT username, password, account FROM users  LIMIT 1");
  $stmt->bind_param('ss', $username, $password);
  $stmt->execute();
  $stmt->bind_result($username, $password, $account);
  $stmt->store_result();

  ?>