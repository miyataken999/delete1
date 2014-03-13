<?php
  header("Content-Type: text/plain; charset=UTF-8");

  //自分自身のファイルの17バイト目から12バイトを読み取る
  $contents = file_get_contents(__FILE__, 0, NULL, 17, 12);

  echo "読み込んだ文字列 => {$contents}";
?>