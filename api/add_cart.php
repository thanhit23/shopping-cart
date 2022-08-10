<?php
  session_start();
  require($_SERVER['DOCUMENT_ROOT'] . '/dbConnection.php');
  require("../helpers/index.php");
  $id = (int)$_POST["idProduct"];
  $quantity = (int)$_POST["quantity"];
  $id_user = (int)$_SESSION['id_user'];
  $sql = "SELECT * FROM `cart` WHERE `id_product` = $id AND `id_user` = $id_user";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $quantity_db = $row["quantity"];
    $reslut_quantity = $quantity + (int)$quantity_db;
    $sql = "UPDATE `cart` SET `quantity`= $reslut_quantity WHERE `id_product` = $id";
    $conn->query($sql);
  } else {
    $sql = "INSERT INTO `cart`(`quantity`, `id_product`, `id_user`) VALUES ($quantity, $id, $id_user)";
    $conn->query($sql);
    response_success();
  }
