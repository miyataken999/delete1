<?php
  header("Content-Type: text/html; charset=UTF-8");

  //環境変数と各種変数の情報を表示する
  phpinfo(INFO_ENVIRONMENT | INFO_VARIABLES);
?>