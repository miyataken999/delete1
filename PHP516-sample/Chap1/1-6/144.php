<?php
  header("Content-Type: text/plain; charset=UTF-8");

  echo "100から1000までの乱数（整数）\n";
  echo "rand関数 => ".rand(100, 1000)."\n";
  echo "mt_rand関数 => ".mt_rand(100, 1000)."\n";
  echo "\n";
  echo "0.0から1.0までの乱数\n";
  echo "lcg_value関数 => ".lcg_value()."\n";
?>