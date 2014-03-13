<?php
  $file = "test.txt";

  header("Content-Type: text/plain; charset=UTF-8");

  clearstatcache();
  //ファイルが存在しない場合には、空のファイルを作成
  if(is_file($file) === FALSE) {
    touch($file);
  }

  $fhandle = @fopen($file, "rb");

  if($fhandle === FALSE) {
    echo "ファイルが開けません";
  }
  else {
    echo "ファイルを開きました\n";

    fclose($fhandle);
    echo "ファイルを閉じました\n";
  }
?>