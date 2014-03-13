<?php
  //セッションの開始
  session_start();

  header("Content-Type: text/plain; charset=UTF-8");

  echo "セッションを開始しました\n";

  if(empty($_SESSION['count'])) {
    //初めてのアクセス
    //セッションデータを破棄
    $_SESSION = array();
    $_SESSION['count'] = 1;
  }
  else {
    //2回目以降のアクセス
    $_SESSION['count']++;
  }

  echo "このブラウザでこのページを開くのは、{$_SESSION['count']}回目です\n\n";

  echo "セッションデータ一覧\n";
  print_r($_SESSION);

  //保管可能な文字列
  $_SESSION['data1'] = "データ1の文字列";

  //セッションの終了
  session_write_close();
  echo "セッションを終了しました\n";

  //以降のコードではセッションデータを変更できない

  //保管できない文字列
  $_SESSION['data2'] = "データ2の文字列";
?>