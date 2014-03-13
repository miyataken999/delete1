<?php
  //セッション開始
  session_start();

  header("Content-Type: text/plain; charset=UTF-8");

  //全てのセッションデータを削除
  $_SESSION = array();

  $result = session_destroy();

  if($result === TRUE) {
    echo "セッションを破棄しました。\n";
  }
  else {
    echo "セッションの破棄に失敗しました。\n";
  }
?>