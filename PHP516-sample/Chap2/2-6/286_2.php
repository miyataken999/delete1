<?php
  //セッション開始
  session_start();

  header("Content-Type: text/plain; charset=UTF-8");

  echo "セッションに格納されているデータ\n";
  print_r($_SESSION);

  $_SESSION = array();
  session_destroy();

  echo "セッションを破棄しました\n";
?>