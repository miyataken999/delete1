<?php
  //セッション開始
  $result = session_start();

  header("Content-Type: text/plain; charset=UTF-8");

  if($result === TRUE) {
    echo "セッションを開始しました。\n";
  }
  else {
    echo "セッションの開始に失敗しました。\n";
  }

  //セッションの破棄
  session_destroy();
?>