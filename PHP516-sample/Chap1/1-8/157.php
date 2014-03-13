<?php
  //相対パスで指定するディレクトリパス
  $directory_path = "./test1/test2/test3";

  header("Content-Type: text/plain; charset=UTF-8");

  if(is_dir($directory_path)) {
    echo "ディレクトリが既に存在します";
  }
  else {
    $result = mkdir($directory_path, 0755, TRUE);
    echo "ディレクトリ作成結果 => ";
    var_dump($result);
  }
?>