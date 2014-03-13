<?php
  $file = "test.txt";

  header("Content-Type: text/plain; charset=UTF-8");

  //排他ロックをかけてファイルに書き込む
  $length = file_put_contents($file, "abcdefg", LOCK_EX);

  echo "ファイルに書き込んだバイト数 => ";
  var_dump($length);

  echo "ファイルに書き込んだ文字列 => ";
  echo file_get_contents($file);
?>