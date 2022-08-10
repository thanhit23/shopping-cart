<?php
  session_start();
  require("../helpers/index.php");
  response_error('Failed');
  
  if ($_POST) {
    if ($_SESSION['user'] != null) {
      response_success();
    }
  }
  