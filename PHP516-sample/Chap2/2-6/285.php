<?php
  //セッションIDを設定
  $session_id = session_id( sha1(time()) );
  //セッション開始
  $result = session_start();

  header("Content-Type: text/plain; charset=UTF-8");

  if($result === TRUE) {
    echo "セッションを開始しました。\n";
    echo "現在のセッションID => ".session_id()."\n";
    echo "セッションIDのクエリ文字列 => ".SID."\n";
  }
  else {
    echo "セッションの開始に失敗しました。\n";
  }

  //セッションの破棄
  session_destroy();
?>