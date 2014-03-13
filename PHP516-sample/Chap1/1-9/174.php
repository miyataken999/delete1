<?php
  header("Content-Type: text/plain; charset=UTF-8");

  clearstatcache();

  //存在しないファイル
  $result = file_exists("/test/sample/not_found.txt");
  echo "/test/sample/not_found.txtは";
  echo ($result ? "存在する": "存在しない");
  echo "\n";

  //存在するディレクトリ
  $result = file_exists(__DIR__);
  echo __DIR__."は";
  echo ($result ? "存在する": "存在しない");
?>