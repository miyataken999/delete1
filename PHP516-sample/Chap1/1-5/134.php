<?php
  $string_var = "abc1234ABCａｂｃＡＢＣあかさたな";

  header("Content-Type: text/plain; charset=UTF-8");

  echo "「{$string_var}」 = ".mb_strlen($string_var)."文字\n";
?>