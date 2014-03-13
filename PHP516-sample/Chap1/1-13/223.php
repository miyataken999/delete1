<?php
  $arg_string = "This is 'test' parameter.";

  header("Content-Type: text/plain; charset=UTF-8");

  echo "エスケープ前の引数文字列 => {$arg_string}\n";
  echo "エスケープ後の引数文字列 => ".escapeshellarg($arg_string)."\n";
?>