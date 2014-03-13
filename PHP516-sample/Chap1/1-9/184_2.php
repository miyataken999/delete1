<?php
  header("Content-Type: text/plain; charset=UTF-8");

  $fhandle = @fopen(__FILE__, "rb");

  if($fhandle === FALSE) {
    echo "ファイルが開けません";
  }
  else {
    $contents = stream_get_contents($fhandle);

    echo "読み込み文字列 => ";
    var_dump($contents);

    fclose($fhandle);
  }
?>