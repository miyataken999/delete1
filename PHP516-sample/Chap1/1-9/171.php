<?php
  $file = "test.txt";

  header("Content-Type: text/plain; charset=UTF-8");

  clearstatcache();
  //ファイルが存在しない場合には、空のファイルを作成
  if(is_file($file) === FALSE) {
    touch($file);
  }

  $result = unlink($file);
  echo "削除結果 => ";
  var_dump($result);
?>