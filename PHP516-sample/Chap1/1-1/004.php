<?php
  header("Content-Type: text/plain; charset=UTF-8");
  //サーバー情報および実行時の環境情報を一覧で表示する
  foreach($_SERVER as $key=>$value) {
    echo '$_SERVER["'.$key.'"] => '.$value."\n";
  }
?>