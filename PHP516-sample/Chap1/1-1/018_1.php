<?php
  //Windows系OSの場合
  //コマンドの結果がShift_JISのため、出力形式をShift_JISに指定
  header("Content-Type: text/plain; charset=Shift_JIS");

  //カレントディレクトリのファイル一覧を表示
  $dir_result = `dir /B`;
  echo $dir_result."\n";
?>