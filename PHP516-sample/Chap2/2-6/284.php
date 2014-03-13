<?php
  //セッション名を設定
  $before_name = session_name("phpSessionId");
  //セッション開始
  $result = session_start();

  header("Content-Type: text/plain; charset=UTF-8");

  if($result === TRUE) {
    echo "セッションを開始しました。\n";
    echo "元のセッション名 => {$before_name}\n";
    echo "現在のセッション名 => ".session_name()."\n";
  }
  else {
    echo "セッションの開始に失敗しました。\n";
  }

  //セッションの破棄
  session_destroy();
?>