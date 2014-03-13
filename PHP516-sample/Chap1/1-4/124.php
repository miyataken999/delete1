<?php
  $string_var = "http://www.example.com/sample/page.php";

  header("Content-Type: text/plain; charset=UTF-8");

  $result = preg_quote($string_var, "/");

  echo "エスケープ前の文字列\n";
  echo "{$string_var}\n\n";
  echo "エスケープ後の文字列\n";
  echo "{$result}\n";
?>