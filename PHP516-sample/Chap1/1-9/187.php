<?php
  header("Content-Type: text/plain; charset=UTF-8");

  $fhandle = @fopen(__FILE__, "rb");

  if($fhandle === FALSE) {
    echo "ファイルが開けません";
  }
  else {
    //1行読み込み
    $line = fgets($fhandle);
    echo "読み込んだ行 => {$line}\n";

    $pointer = ftell($fhandle);
    echo "現在のファイルポインタの位置 => {$pointer}\n";

    fclose($fhandle);
  }
?>