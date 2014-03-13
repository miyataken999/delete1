<?php
  $file = "test.txt";

  header("Content-Type: text/plain; charset=UTF-8");

  $fhandle = @fopen($file, "rb");

  if($fhandle === FALSE) {
    echo "ファイルが開けません";
  }
  else {
    while(list($value1, $value2, $value3) = fscanf($fhandle, "%05d\t%05d\t%05d\n")) {
      echo "[1]{$value1} [2]{$value2} [3]{$value3}\n";
    }

    fclose($fhandle);
  }
?>