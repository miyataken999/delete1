<?php
  header("Content-Type: text/plain; charset=UTF-8");

  //現在ディレクトリ
  $current = getcwd();

  //@を付けてディレクトリが開けない場合のエラーを抑制
  $dir_handle = @opendir($current);

  if($dir_handle !== FALSE) {
    //1ファイル（ディレクトリ）ずつ読み込む
    while(($file = readdir($dir_handle)) !== FALSE) {
      echo $file, "\n";
    }
    closedir($dir_handle);
  }
  else {
    echo "ディレクトリが開けません";
  }
?>