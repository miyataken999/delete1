<?php
  //このスクリプトは、一部のブラウザでは1秒ごとに画面にテキストが表示されます。

  header("Content-Type: text/plain; charset=UTF-8");

  echo "10秒カウント\n";

  ob_start();

  for($counter=10; $counter>0; $counter--) {
    //残り秒数を出力
    echo "{$counter}秒前\n";
    ob_flush();
    flush();

    //1秒遅延させる
    sleep(1);
  }

  echo "10秒経過しました\n";

  ob_end_flush();
?>