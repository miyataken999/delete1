<?php
  header("Content-Type: text/plain; charset=UTF-8");

  $fhandle = tmpfile();

  if($fhandle === FALSE) {
    echo "テンポラリファイルが開けません";
  }
  else {
    echo "テンポラリファイルを作成しました\n";

    fwrite($fhandle, "abcdefghijklmnopqrstuvwxyz");
    echo "テンポラリファイルに文字列を書き込みました\n";

    rewind($fhandle);
    $line = fgets($fhandle);
    echo "ファイルの中身 => ";
    var_dump($line);

    fclose($fhandle);
    echo "テンポラリファイルを閉じました\n";
  }
?>