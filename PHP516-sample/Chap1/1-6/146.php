<?php
  $sample = 9.55;

  header("Content-Type: text/plain; charset=UTF-8");

  echo "元の値 => ".$sample."\n";
  echo "小数点以下切り上げ => ".ceil($sample)."\n";
  echo "小数点以下切捨て => ".floor($sample)."\n";
  echo "小数点以下1桁で四捨五入 => ".round($sample, 1)."\n";

  echo round(1.30, 1, PHP_ROUND_HALF_UP), "\n";
  echo round(1.34, 1, PHP_ROUND_HALF_UP), "\n";
  echo round(1.35, 1, PHP_ROUND_HALF_UP), "\n";
  echo round(1.38, 1, PHP_ROUND_HALF_UP), "\n";

  echo round(1.30, 1, PHP_ROUND_HALF_DOWN), "\n";
  echo round(1.34, 1, PHP_ROUND_HALF_DOWN), "\n";
  echo round(1.35, 1, PHP_ROUND_HALF_DOWN), "\n";
  echo round(1.36, 1, PHP_ROUND_HALF_DOWN), "\n";

  echo round(1.30, 1, PHP_ROUND_HALF_EVEN), "\n";
  echo round(1.34, 1, PHP_ROUND_HALF_EVEN), "\n";
  echo round(1.35, 1, PHP_ROUND_HALF_EVEN), "\n";
  echo round(1.36, 1, PHP_ROUND_HALF_EVEN), "\n";

  echo round(1.30, 1, PHP_ROUND_HALF_ODD), "\n";
  echo round(1.34, 1, PHP_ROUND_HALF_ODD), "\n";
  echo round(1.35, 1, PHP_ROUND_HALF_ODD), "\n";
  echo round(1.36, 1, PHP_ROUND_HALF_ODD), "\n";
  echo round(1.38, 1, PHP_ROUND_HALF_ODD), "\n";
?>