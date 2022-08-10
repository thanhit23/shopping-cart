<?php
  function response_success() {
    $res = ['status' => true, 'message' => 'successfully', 'data' => null];
    echo json_encode($res);
  }
  function response_error($message) {
    $res = ['status' => false, 'message' => $message, 'data' => null];
    echo json_encode($res);
  }
  