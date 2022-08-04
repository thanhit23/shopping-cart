<?php
  try {
    $host = "db:3306";
    $username = "user";
    $password = "password";
    $db = "db";
    $conn = mysqli_connect($host, $username, $password, $db);
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
  }
?>
