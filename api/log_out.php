<?php
  session_start();
  require "../helpers/index.php";
  $_SESSION['user'] = null;
  $_SESSION['id_user'] = null;
  response_success();
