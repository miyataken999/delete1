<?php
  session_start();

  header("Content-Type: text/plain; charset=UTF-8");

  if(empty($_SESSION['count'])) {
    //初めてのアクセス
    $_SESSION['count'] = 1;
  }
  else {
    //2回目以降のアクセス
    $_SESSION['count']++;
  }

  echo "このブラウザでこのページを開くのは、{$_SESSION['count']}回目です\n";
?>