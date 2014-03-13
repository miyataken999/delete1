<?php
  $string_var = "Ｔｈｉｓ　ｉｓ　ａ　Ｐｅｎ．";

  header("Content-Type: text/plain; charset=UTF-8");

  echo "単語の先頭文字を大文字変換 = ".mb_convert_case($string_var,MB_CASE_TITLE)."\n";
  echo "全て大文字に変換 = ".mb_strtoupper($string_var)."\n";
  echo "全て小文字に変換 = ".mb_strtolower($string_var)."\n";
?>