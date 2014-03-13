<?php
  //020_060_0120_1.phpの実行後に実行してください
  session_start();

  header("Content-Type: text/plain; charset=UTF-8");

  echo "削除前のセッションデータ一覧\n";
  print_r($_SESSION);

  //セッションデータからcountの要素を削除
  unset($_SESSION['count']);

  echo "削除後のセッションデータの一覧\n";
  print_r($_SESSION);
?>