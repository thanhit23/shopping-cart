<?php
  session_start();
  require("../dbConnection.php");
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $sql_password = "SELECT `password` FROM `users` WHERE password = '$password'";
  $sql_email = "SELECT `id`, `email`, `name` FROM `users` WHERE email = '$email'";
  $result_pass = $conn->query($sql_password);
  $result_email = $conn->query($sql_email);
  $res = ['status' => true, 'message' => '', 'data' => null];
  if ($result_pass->num_rows > 0 && $result_email->num_rows > 0) {
    $res['status'] = true;
    $res['message'] = 'Login successfully';
    $res['data'] = null;
    $row = $result_email->fetch_assoc();
    $_SESSION['user'] = $row['name'];
    $_SESSION['id_user'] = $row['id'];
  } else {
    $res['status'] = false;
    $res['message'] = 'Tên tài khoản của bạn hoặc Mật khẩu không đúng, vui lòng thử lại';
    $res['data'] = null;
  }

  echo json_encode($res);
