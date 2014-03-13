<?php
  $sample = 124;

  header("Content-Type: text/plain; charset=UTF-8");

  echo "元の値 => ".$sample."\n";
  echo "2進数表現 => ".base_convert($sample, 10, 2)."\n";
  echo "8進数表現 => ".base_convert($sample, 10, 8)."\n";
  echo "16進数表現 => ".base_convert($sample, 10, 16)."\n";
?>