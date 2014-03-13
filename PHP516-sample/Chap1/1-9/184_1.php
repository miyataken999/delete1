<?php
  header("Content-Type: text/plain; charset=UTF-8");

  $fhandle = @fopen(__FILE__, "rb");

  if($fhandle === FALSE) {
    echo "ファイルが開けません";
  }
  else {
    $result = fpassthru($fhandle);

    echo "読み込み文字数 => ";
    var_dump($result);

    fclose($fhandle);
  }
?>