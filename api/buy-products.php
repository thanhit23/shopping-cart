<?php
  session_start();
  require($_SERVER['DOCUMENT_ROOT'] . '/dbConnection.php');
  require("../helpers/index.php");
  $total = $_POST['total'];
  $user_id = (int)$_SESSION['id_user'];
  $sql = "INSERT INTO `invoice`(`user_id`, `total`) VALUES ($user_id, '$total')";
  $conn->query($sql);
  response_success();
