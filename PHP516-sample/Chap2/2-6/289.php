<?php
  //セッション開始
  session_start();

  header("Content-Type: text/plain; charset=UTF-8");

  //セッション変数初期化
  $_SESSION = array();

  echo "デコード前のセッションデータ\n";
  print_r($_SESSION);
  echo "\n";

  $result = session_decode('data1|s:37:"リスト1で保存された文字列";data2|a:3:{i:0;s:10:"文字列1";i:1;s:10:"文字列2";i:2;s:10:"文字列3";}');

  echo "文字列表現からのデコード結果 => ";
  var_dump($result);
  echo "\n";

  echo "デコード後のセッションデータ\n";
  print_r($_SESSION);

  //セッションを破棄
  $_SESSION = array();
  session_destroy();
?>