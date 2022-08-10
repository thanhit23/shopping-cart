<?php
  session_start();
  require($_SERVER['DOCUMENT_ROOT'] . '/dbConnection.php');
  require("../helpers/index.php");
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $sql_password = "SELECT `password` FROM `users` WHERE password = '$password'";
  $sql_email = "SELECT `id`, `email`, `name` FROM `users` WHERE email = '$email'";
  $result_pass = $conn->query($sql_password);
  $result_email = $conn->query($sql_email);
  if ($result_pass->num_rows > 0 && $result_email->num_rows > 0) {
    response_success();
    $row = $result_email->fetch_assoc();
    $_SESSION['user'] = $row['name'];
    $_SESSION['id_user'] = $row['id'];
  } else {
    response_error('Tên tài khoản của bạn hoặc Mật khẩu không đúng, vui lòng thử lại');
  }
