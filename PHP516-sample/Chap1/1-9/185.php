<?php
  $file = "test.txt";

  header("Content-Type: text/plain; charset=UTF-8");

  $fhandle = @fopen($file, "wb");

  if($fhandle === FALSE) {
    echo "ファイルが開けません";
  }
  else {
    for($value=0; $value<10; $value++) {
      fwrite($fhandle, "{$value}");
    }

    fclose($fhandle);

    echo "ファイルに書き込んだ文字列 => ";
    echo file_get_contents($file);
  }
?>