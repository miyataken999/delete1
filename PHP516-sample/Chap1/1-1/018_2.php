<?php
  //Linux系OSの場合
  header("Content-Type: text/plain; charset=UTF-8");

  //カレントディレクトリのファイル一覧を表示
  $dir_result = `ls -1`;
  echo $dir_result."\n";
?>