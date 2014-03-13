<?php
  //このソースコードはUTF-8で書かれています。
  $str_array = array("あいうえお", "かきくけこ", "さしすせそ");

  header("Content-Type: text/plain; charset=EUC-JP");

  echo "mb_convert_encoding\n";
  echo mb_convert_encoding("EUC-JPの文字列を表示", "EUC-JP", "UTF-8");
  echo "\n\n";

  echo "mb_convert_variables\n";
  mb_convert_variables("EUC-JP", "UTF-8", $str_array);
  foreach($str_array as $key => $value) {
    echo "[{$key}] => {$value}\n";
  }
?>