<?php
  $string_var = "123abc4567defg";

  header("Content-Type: text/plain; charset=UTF-8");

  $length = strspn($string_var, "0123456789");
  echo "先頭以降の数字だけで構成された文字列の長さ = ";
  echo "{$length}\n";

  $length = strspn($string_var, "0123456789", 4);
  echo "5番目以降の数字だけで構成された文字列の長さ = ";
  echo "{$length}\n";

  $length = strspn($string_var, "0123456789", 8);
  echo "9番目以降の数字だけで構成された文字列の長さ = ";
  echo "{$length}\n";
?>