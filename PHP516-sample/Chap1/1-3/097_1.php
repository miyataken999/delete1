<?php
  $integer_var = 123;
  $float_var = 12.34567;
  $string_var = "ABC";

  header("Content-Type: text/plain; charset=UTF-8");

  echo sprintf("整数(123) = %05d", $integer_var), "\n";
  echo sprintf("浮動小数点数(12.34567) = %.3f", $float_var), "\n";
  echo sprintf("文字列(\"ABC\") = % 5s", $string_var), "\n";
?>