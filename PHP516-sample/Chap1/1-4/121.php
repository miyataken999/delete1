<?php
  //郵便番号にマッチするパターン
  //サブパターン1 = 先頭3桁の数字
  //サブパターン2 = 後方4桁の数字
  $zipcode_pattern = "/([0-9]{3})-([0-9]{4})/";
  $string_var = "1,100-0001,2,123-0123,3,888-0000";

  header("Content-Type: text/plain; charset=UTF-8");

  $match_count = preg_match($zipcode_pattern, $string_var, $matches);

  echo "preg_match関数\n";
  echo "マッチ回数 = {$match_count}\n";
  print_r($matches);
  echo "\n";

  $match_count = preg_match_all($zipcode_pattern, $string_var, $matches, PREG_SET_ORDER);

  echo "preg_match_all関数\n";
  echo "マッチ回数 = {$match_count}\n";
  print_r($matches);
?>