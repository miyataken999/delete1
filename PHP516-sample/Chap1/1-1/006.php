<?php
  header("Content-Type: text/plain; charset=UTF-8");
  echo "現在実行しているプログラムファイル = ".__FILE__."\n";
  echo "現在実行しているプログラム行番号 = ".__LINE__."\n";

  //定義されている変数の一覧
  print_r(get_defined_constants(true));
?>