<?php
  $file = "test.txt";

  header("Content-Type: text/plain; charset=UTF-8");

  clearstatcache();
  //ファイルが存在しない場合には、空のファイルを作成
  if(is_file($file) === FALSE) {
    touch($file);
  }

  $fhandle = @fopen($file, "wb");

  if($fhandle === FALSE) {
    echo "ファイルが開けません";
  }
  else {
    $result = flock($fhandle, LOCK_SH);
    if($result) {
      echo "共有ロックしました\n";
      //5秒間待つ
      sleep(5);

      flock($fhandle, LOCK_UN);
      echo "ロックを開放しました\n";
    }
    else {
      echo "共有ロックできませんでした\n";
    }

    fclose($fhandle);
  }
?>