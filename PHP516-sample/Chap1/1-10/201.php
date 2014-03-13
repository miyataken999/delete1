<?php
  $not_set_var;  //値を格納していない変数
  $null_var = NULL;
  $empty_string = "";
  $int_zero = 0;
  $float_zero = 0.0;
  $string_zero = "0";
  $bool_false = FALSE;
  $empty_array = array();

  header("Content-Type: text/plain; charset=UTF-8");

  echo "値を格納していない変数\n";
  echo "isset => ".(isset($not_set_var)? "TRUE": "FALSE")." ";
  echo "empty => ".(empty($not_set_var)? "TRUE": "FALSE")."\n";

  echo "NULL\n";
  echo "isset => ".(isset($null_var)? "TRUE": "FALSE")." ";
  echo "empty => ".(empty($null_var)? "TRUE": "FALSE")."\n";

  echo "空文字\n";
  echo "isset => ".(isset($empty_string)? "TRUE": "FALSE")." ";
  echo "empty => ".(empty($empty_string)? "TRUE": "FALSE")."\n";

  echo "整数値のゼロ\n";
  echo "isset => ".(isset($int_zero)? "TRUE": "FALSE")." ";
  echo "empty => ".(empty($int_zero)? "TRUE": "FALSE")."\n";

  echo "浮動小数点数数値のゼロ\n";
  echo "isset => ".(isset($float_zero)? "TRUE": "FALSE")." ";
  echo "empty => ".(empty($float_zero)? "TRUE": "FALSE")."\n";

  echo "文字列のゼロ\n";
  echo "isset => ".(isset($string_zero)? "TRUE": "FALSE")." ";
  echo "empty => ".(empty($string_zero)? "TRUE": "FALSE")."\n";

  echo "FALSE\n";
  echo "isset => ".(isset($bool_false)? "TRUE": "FALSE")." ";
  echo "empty => ".(empty($bool_false)? "TRUE": "FALSE")."\n";

  echo "空の配列\n";
  echo "isset => ".(isset($empty_array)? "TRUE": "FALSE")." ";
  echo "empty => ".(empty($empty_array)? "TRUE": "FALSE")."\n";
?>