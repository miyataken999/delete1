<?php
  header("Content-Type: text/plain; charset=UTF-8");

  $value = 123;
  echo "元の変数 => ";
  var_dump($value);
  echo "\n";

  echo "論理値へのキャスト\n";
  $bool_value = (bool) $value;
  var_dump($bool_value);

  echo "浮動小数点数へのキャスト\n";
  $float_value = (float) $value;
  var_dump($float_value);

  echo "文字列へのキャスト\n";
  $string_value = (string) $value;
  var_dump($string_value);

  echo "配列へのキャスト\n";
  $array_value = (array) $value;
  var_dump($array_value);

  echo "オブジェクトへのキャスト\n";
  $object_value = (object) $value;
  var_dump($object_value);
?>