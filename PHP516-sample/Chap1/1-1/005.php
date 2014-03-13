<?php
  //大文字小文字を区別しない定数を定義する
  define("CONSTANT_VALUE", "PHPの極意", TRUE);

  header("Content-Type: text/plain; charset=UTF-8");

  if(defined("CONSTANT_VALUE")) {
    echo "CONSTANT_VALUE定数の値 => ".CONSTANT_VALUE."\n";
  }
  if(defined("Constant_Value")) {
    echo "Constant_Value定数の値 => ".Constant_Value."\n";
  }
?>