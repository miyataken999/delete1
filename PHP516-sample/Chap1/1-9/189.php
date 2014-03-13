<?php
  header("Content-Type: text/plain; charset=UTF-8");

  $fhandle = @fopen(__FILE__, "rb");

  if($fhandle === FALSE) {
    echo "ファイルが開けません";
  }
  else {
    echo "最初のファイルポインタの位置 => ".ftell($fhandle)."\n";

    //現在位置から10バイトの位置に移動する
    $result = fseek($fhandle, 10, SEEK_CUR);
    echo "現在のファイルポインタの位置 => ".ftell($fhandle)."\n";

    //ファイルの先頭から10バイトの位置に移動する
    $result = fseek($fhandle, 10, SEEK_CUR);
    echo "現在のファイルポインタの位置 => ".ftell($fhandle)."\n";

    //ファイルの末尾から-5バイトの位置に移動する
    $result = fseek($fhandle, -5, SEEK_END);
    echo "現在のファイルポインタの位置 => ".ftell($fhandle)."\n";

    fclose($fhandle);
  }
?>