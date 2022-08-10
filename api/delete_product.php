<?php
  require($_SERVER['DOCUMENT_ROOT'] . '/dbConnection.php');
  require("../helpers/index.php");
  $id_product = (int)$_POST['id_product'];
  $sql = "DELETE FROM `cart` WHERE id = $id_product";
  $conn->query($sql);
  response_success();
