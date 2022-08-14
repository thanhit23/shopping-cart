<?php
  try {
    $host = "localhost:3306";
    $username = "root";
    $password = "Abcd@1234";
    $db = "db";
    $conn = mysqli_connect($host, $username, $password, $db);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
  }
?>
