<?php
  $sample = array(7, 123, 0.5, -10, "75", 3.1415);

  header("Content-Type: text/plain; charset=UTF-8");

  echo "最大値 => ".max($sample)."\n";
  echo "最小値 => ".min($sample)."\n";
?>