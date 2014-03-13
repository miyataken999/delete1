<?php
  $old_file = "../test.txt";
  $new_file = "test2.txt";

  header("Content-Type: text/plain; charset=UTF-8");

  clearstatcache();
  //ファイルが存在しない場合には、空のファイルを作成
  if(is_file($old_file) === FALSE) {
    touch($old_file);
  }

  $result = rename($old_file, $new_file);
  echo "ファイル名変更結果 => ";
  var_dump($result);
?>