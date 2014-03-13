<?php
  $file = "test.txt";

  header("Content-Type: text/plain; charset=UTF-8");

  //自分自身のファイル
  $fhandle = @fopen($file, "wb");

  if($fhandle === FALSE) {
    echo "ファイルが開けません";
  }
  else {
    $result = fprintf($fhandle, "%d(10進数) = %08b(2進数)", 72, 72);
    echo "書き込んだ文字列の長さ => {$result}\n";

    fclose($fhandle);

    echo "書き込んだファイルの内容 => ";
    var_dump(file_get_contents($file));
  }
?>