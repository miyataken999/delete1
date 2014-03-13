<?php
  $string_var = "すもももももももものうち";

  header("Content-Type: text/plain; charset=UTF-8");

  echo "置換前 => {$string_var}\n";

  $pattern = "もも(も|)";
  $result = mb_ereg_replace($pattern, "桃\\1", $string_var);

  echo "置換後 => {$result}\n";
?>