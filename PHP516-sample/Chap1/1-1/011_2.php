<?php
  header("Content-Type: text/plain; charset=UTF-8");

  $x = 4;
  echo "\$x++の場合\n";
  echo "演算前の\$x = {$x}\n";
  echo "式の戻り値 = ".($x++)."\n";
  echo "演算後の\$x = {$x}\n";
  echo "\n";

  $x = 4;
  echo "++\$xの場合\n";
  echo "演算前の\$x = {$x}\n";
  echo "式の戻り値 = ".(++$x)."\n";
  echo "演算後の\$x = {$x}\n";
?>