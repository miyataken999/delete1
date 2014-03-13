<?php
  //セッション開始
  session_start();

  header("Content-Type: text/plain; charset=UTF-8");

  //セッションに値を格納
  $_SESSION['data1'] = "リスト1で保存された文字列";
  $_SESSION["data2"] = array("文字列1", "文字列2", "文字列3");

  echo "セッションに値を格納しました\n";
?>