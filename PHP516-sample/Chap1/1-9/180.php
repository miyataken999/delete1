<?php
  header("Content-Type: text/plain; charset=UTF-8");

  //自分自身のファイル
  $fhandle = @fopen(__FILE__, "rb");

  if($fhandle === FALSE) {
    echo "ファイルが開けません";
  }
  else {
    $counter = 0;
    while(($line = fgets($fhandle, 20)) !== FALSE) {
      printf("[%d] => %s\n", $counter++, $line);
    }

    echo "ファイルを最後まで読み込みました\n";
    fclose($fhandle);
  }
?>