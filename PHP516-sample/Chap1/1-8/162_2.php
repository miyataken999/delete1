<?php
  header("Content-Type: text/plain; charset=UTF-8");

  //現在ディレクトリ
  $current = getcwd();

  //@を付けてディレクトリが開けない場合のエラーを抑制
  $obj = @dir($current);

  if($obj !== FALSE) {
    //1ファイル（ディレクトリ）ずつ読み込む
    while(($file = $obj->read()) !== FALSE) {
      echo $file, "\n";
    }
    $obj->close();
  }
  else {
    echo "ディレクトリが開けません";
  }
?>