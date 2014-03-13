<?php
  $file = "test.txt";

  header("Content-Type: text/plain; charset=UTF-8");

  clearstatcache();
  echo "[{$file}]";
  echo (is_file($file) ? "ファイルが存在します": "ファイルが存在しません")."\n";

  //本日の0時の日付の最終更新日時と最終アクセス日時に更新する
  $result = touch($file, mktime(0, 0, 0), mktime(0, 0, 0));
  echo "実行結果 => ";
  var_dump($result);

  clearstatcache();
  echo "最終アクセス日時 => ".date('Y/m/d H:i:s', fileatime($file))."\n";
  echo "最終更新日時 => ".date('Y/m/d H:i:s', filemtime($file))."\n";
?>