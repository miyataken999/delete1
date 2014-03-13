<?php
  $file = "test.txt";

  header("Content-Type: text/plain; charset=UTF-8");

  //30バイトのファイルを作成
  file_put_contents($file, "012345678901234567890123456789", LOCK_EX);

  echo "切り詰め前のファイルの内容 => ";
  var_dump(file_get_contents($file));

  $fhandle = @fopen($file, "r+b");

  if($fhandle === FALSE) {
    echo "ファイルが開けません";
  }
  else {
    if(ftruncate($fhandle, 10)) {
      echo "ファイルを10バイトに切り詰めました\n";
    }
    else {
      echo "ファイルの切り詰めに失敗しました\n";
    }

    fclose($fhandle);

    echo "切り詰め後のファイルの内容 => ";
    var_dump(file_get_contents($file));
  }
?>