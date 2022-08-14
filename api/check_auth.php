<?php
  session_start();
  require("../helpers/index.php");
  
  if ($_POST) {
    if ($_SESSION['user'] != null) {
      response_success();
    } else {
      response_error('Failed');
    }
  }
  