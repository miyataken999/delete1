<?php
  $not_set_var;  //格納していない変数
  $null_var = NULL;
  $bool_var = TRUE;
  $int_var = 0;
  $float_var = 0.0;
  $string_var = "abcdefg";
  $array_var = array("value1", "value2");
  $resource_var = stream_context_create(); //リソース型
  $object_var = new DateTimeZone("Asia/Tokyo"); //オブジェクト型

  header("Content-Type: text/plain; charset=UTF-8");

  printf("値を格納していない変数 => %s\n", gettype($not_set_var));
  printf("NULL => %s\n", gettype($null_var));
  printf("論理値 => %s\n", gettype($bool_var));
  printf("整数値 => %s\n", gettype($int_var));
  printf("浮動小数点数値 => %s\n", gettype($float_var));
  printf("文字列 => %s\n", gettype($string_var));
  printf("配列 => %s\n", gettype($array_var));
  printf("リソース型の変数 => %s\n", gettype($resource_var));
  printf("オブジェクト型の変数 => %s\n", gettype($object_var));
?>