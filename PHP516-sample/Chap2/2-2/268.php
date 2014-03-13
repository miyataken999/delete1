<?php
  //絶対パスでなければシャットダウン関数で処理できません
  $file = 'C:\pleiades-e3.5\workspace\php50x\public_html\020\020\test.txt';
  //$file = '/tmp/test.txt';

  //ファイルが既に存在する場合には削除
  if(file_exists($file)) {
    unlink($file);
  }

  //シャットダウン関数
  function on_shutdown($append_file) {
    file_put_contents($append_file, "シャットダウン関数からの出力", FILE_APPEND);
  }

  header("Content-Type: text/plain; charset=UTF-8");

  //シャットダウン関数を登録
  register_shutdown_function("on_shutdown", $file);

  echo "処理を開始します。\n";

  for($i=1; $i<=100; $i++) {
    file_put_contents($file, "{$i}\n", FILE_APPEND);
  }

  echo "処理が終了しました。\n";
?>