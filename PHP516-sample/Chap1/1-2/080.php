<?php
  $bool_var = TRUE;
  $integer_var = 10;
  $float_var = 30.25;
  $string_var = "文字列";
  $array_var = array(1, 2, 3, 4, 5);

  header("Content-Type: text/plain; charset=UTF-8");

  echo "\$bool_varは".((is_array($bool_var)) ? "配列である\n" : "配列ではない\n");
  echo "\$integer_varは".((is_array($integer_var)) ? "配列である\n" : "配列ではない\n");
  echo "\$float_varは".((is_array($float_var)) ? "配列である\n" : "配列ではない\n");
  echo "\$string_varは".((is_array($string_var)) ? "配列である\n" : "配列ではない\n");
  echo "\$array_varは".((is_array($array_var)) ? "配列である\n" : "配列ではない\n");
?>