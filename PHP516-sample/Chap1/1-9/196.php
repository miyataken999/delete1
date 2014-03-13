<?php
  header("Content-Type: text/plain; charset=UTF-8");

  echo "現在ディレクトリ中の拡張子が.phpのファイル一覧\n";
  $matches = glob("*.php");
  print_r($matches);
?>