<?php
  session_start();
  require ("../dbConnection.php");
  $name = $_POST["name"];
  $phone_number = $_POST["phoneNumber"];
  $email = $_POST["email"];
  $password = md5($_POST["password"]);
  $sql = "SELECT `email` FROM `users`";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $row_email = $row['email'];
      if ($row_email == $email) {
        $dbemail = $row_email;
      }
    }
    $res = ['status' => true, 'message' => '', 'data' => null];
    if ($dbemail == $email) {
      $res['status'] = false;
      $res['message'] = "Email đã tồn tại";
      $res['data'] = $dbemail == $email;
    } else {
      $res['message'] = "Successfully created user.";
      $sql = "INSERT INTO `users`(`name`, `email`, `phone_number`, `password`) VALUES ('$name','$email','$phone_number','$password')";
      $conn->query($sql);
      $_SESSION["user"] = $name;
    }
    echo json_encode($res);
  }
