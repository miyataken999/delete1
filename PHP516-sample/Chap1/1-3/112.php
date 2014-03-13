<?php
  $base = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

  header("Content-Type: text/plain; charset=UTF-8");

  echo "3番目の文字から5桁の文字列 = ";
  echo substr($base, 2, 5)."\n";

  echo "20番目の文字から末尾まで文字列 = ";
  echo substr($base, 19)."\n";
?>