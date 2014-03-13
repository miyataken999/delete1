<?php
  header("Content-Type: text/plain; charset=UTF-8");

  $var_array = array(
    "整数値の「0」" => 0,
    "文字列の「0」" => "0",
    "浮動小数点数の123.0" => 123.0,
    "16進数文字列の0x30" => "0x30",
    "文字列のabc" => "abc",
    "空の配列" => array(),
    "空でない配列" => array(1, 2, 3)
  );

  echo "intval関数\n";
  foreach($var_array as $key => $value) {
    echo "$key => ";
    var_dump(intval($value, 10));
  }

  echo "\n";
  echo "floatval関数\n";
  foreach($var_array as $key => $value) {
    echo "$key => ";
    var_dump(floatval($value));
  }

  echo "\n";
  echo "strval関数\n";
  foreach($var_array as $key => $value) {
    echo "$key => ";
    var_dump(strval($value));
  }
?>