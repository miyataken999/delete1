<?php
  header("Content-Type: text/plain; charset=UTF-8");

  $fhandle = @fopen(__FILE__, "rb");

  if($fhandle === FALSE) {
    echo "ファイルが開けません";
  }
  else {
    $counter = 0;
    while(($read_char = fgetc($fhandle)) !== FALSE) {
      //ファイルの文字コードを表示する
      printf("[%d] => 0x%02x\n", $counter++, ord($read_char));
    }

    echo "ファイルを最後まで読み込みました\n";
    fclose($fhandle);
  }
?>