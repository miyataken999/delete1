<?php
  $source_file = "test.txt";
  $dest_file = "test2.txt";

  header("Content-Type: text/plain; charset=UTF-8");

  clearstatcache();
  //ファイルが存在しない場合には、空のファイルを作成
  if(is_file($source_file) === FALSE) {
    touch($source_file);
  }

  $result = copy($source_file, $dest_file);
  echo "コピー結果 => ";
  var_dump($result);
?>