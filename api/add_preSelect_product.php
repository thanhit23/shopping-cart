<?php
  session_start();
  require($_SERVER['DOCUMENT_ROOT'] . '/dbConnection.php');
  require("../helpers/index.php");
  $email = $_POST['email'];
  $quantity = (int)$_POST["quantity"];
  $id_product = (int)$_POST["idProductAdded"];
  $sql_id = "SELECT `id` FROM `users` WHERE email = \"$email\"";
  $result = $conn->query($sql_id);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $id = (int)$row['id'];
    if ($quantity && $id_product) {
      $sql = "INSERT INTO `cart`(`quantity`, `id_product`, `id_user`) VALUES ('$quantity','$id_product','$id')";
      $conn->query($sql);
      response_success();
    }
  } else {
    response_error('Failed');
  }
