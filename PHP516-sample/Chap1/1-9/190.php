<?php
  header("Content-Type: text/plain; charset=UTF-8");

  $fhandle = @fopen(__FILE__, "rb");

  if($fhandle === FALSE) {
    echo "ファイルが開けません";
  }
  else {
    //先頭位置から10バイトの位置に移動する
    $result = fseek($fhandle, 10, SEEK_SET);
    echo "現在のファイルポインタの位置 => ".ftell($fhandle)."\n";

    //先頭に戻す
    $result = rewind($fhandle);
    echo "現在のファイルポインタの位置 => ".ftell($fhandle)."\n";

    fclose($fhandle);
  }
?>