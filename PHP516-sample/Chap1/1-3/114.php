<?php
  $base = 'this is a pen.';

  header("Content-Type: text/plain; charset=UTF-8");

  echo "元の文字列 = {$base}\n";
  echo "strtoupper関数の結果 = ".strtoupper($base)."\n";
  echo "strtolower関数の結果 = ".strtolower($base)."\n";
  echo "ucfirst関数の結果 = ".ucfirst($base)."\n";
  echo "lcfirst関数の結果 = ".lcfirst($base)."\n";
  echo "ucwords関数の結果 = ".ucwords($base)."\n";
?>