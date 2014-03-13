<?php
  header("Content-Type: text/plain; charset=UTF-8");

  echo "現在のディレクトリ => ".__DIR__."\n";
  echo "現在のディレクトリのファイル一覧\n";

  $files = @scandir(__DIR__);

  if(is_array($files)) {
    foreach($files as $key => $file) {
      echo $file, "\n";
    }
  }
  else {
    echo "ディレクトリが開けません";
  }

  $uniq_name = tempnam(__DIR__, "PHP_UNIQ_");
  echo "一意なファイル名 => ".$uniq_name."\n";

  //ファイルは削除されないため明示的に削除する
  unlink($uniq_name);
?>