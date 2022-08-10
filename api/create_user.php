<?php
  session_start();
  require($_SERVER['DOCUMENT_ROOT'] . '/dbConnection.php');
  require("../helpers/index.php");
  $name = $_POST["name"];
  $phone_number = $_POST["phoneNumber"];
  $email = $_POST["email"];
  $password = md5($_POST["password"]);
  $sql = "SELECT `email` FROM `users` WHERE `email` = '$email' ";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    response_error('Email đã tồn tại');
  } else {
    $sql = "INSERT INTO `users`(`name`, `email`, `phone_number`, `password`) VALUES ('$name','$email','$phone_number','$password')";
    $conn->query($sql);
    $_SESSION["user"] = $name;
    $_SESSION["email"] = $email;
    response_success();
  }
