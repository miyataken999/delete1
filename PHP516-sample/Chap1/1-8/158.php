<?php
  //相対パスで指定するディレクトリパス
  $directory_path = "./test1/test2/test3";

  header("Content-Type: text/plain; charset=UTF-8");

  if(is_dir($directory_path)) {
    $result = rmdir($directory_path);
    echo "ディレクトリ削除結果 => ";
    var_dump($result);
  }
  else {
    echo "ディレクトリが存在しません";
  }
?>