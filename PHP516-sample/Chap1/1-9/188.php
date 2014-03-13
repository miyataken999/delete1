<?php
  header("Content-Type: text/plain; charset=UTF-8");

  $fhandle = @fopen(__FILE__, "rb");

  if($fhandle === FALSE) {
    echo "ファイルが開けません";
  }
  else {
    //無限ループ
    for($num=1; TRUE; $num++){

      //1行読み込み
      $line = fgets($fhandle);

      if(feof($fhandle) === TRUE) {
        echo "{$num}行目でファイルの末尾に達しました\n";
        break;
      }
    }

    fclose($fhandle);
  }
?>