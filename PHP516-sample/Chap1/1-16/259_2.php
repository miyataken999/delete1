<?php
  header("Content-Type: text/plain; charset=UTF-8");

  $fhandle = @fopen("cannot_find_file.txt", "rb") or die("ファイルが開けませんでした");

  //ファイルが見つからない場合、以降のコードは実行されない
  echo fread($fhandle, filesize("cannot_find_file.txt"));
  fclose($fhandle);
  echo "ファイルを読み込みました\n";
?>