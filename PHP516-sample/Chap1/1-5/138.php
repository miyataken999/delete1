<?php
  $string_var = "すもももももももものうち";

  header("Content-Type: text/plain; charset=UTF-8");

  echo "「{$string_var}」\n";
  echo "「もも」の出現回数 = ".mb_substr_count($string_var, "もも")."\n";
?>