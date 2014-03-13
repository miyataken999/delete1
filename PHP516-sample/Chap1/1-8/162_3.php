<?php
  header("Content-Type: text/plain; charset=UTF-8");

  //現在ディレクトリ
  $current = getcwd();

  //@を付けてディレクトリが開けない場合のエラーを抑制
  $files = @scandir($current);

  if(is_array($files)) {
    foreach($files as $key => $file) {
      echo $file, "\n";
    }
  }
  else {
    echo "ディレクトリが開けません";
  }
?>