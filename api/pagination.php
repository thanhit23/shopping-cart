<?php
  session_start();
  require($_SERVER['DOCUMENT_ROOT'] . '/dbConnection.php');
  require("../helpers/index.php");
  $index = $_POST["pageIndex"];
  $_SESSION['pageIndex'] = $index;
  response_success();
