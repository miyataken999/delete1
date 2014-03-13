<?php
  header("Content-Type: text/plain; charset=UTF-8");

  //自分自身のファイルを読み取る
  $contents = file(__FILE__, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

  if($contents !== FALSE) {
    foreach($contents as $key => $value) {
      echo "[{$key}] => {$value}\n";
    }
  }
?>