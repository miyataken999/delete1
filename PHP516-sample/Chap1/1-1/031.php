<?php
  $a = 10;
  $b =& $a;
  header("Content-Type: text/plain; charset=UTF-8");

  echo "\$a = {$a}\n";
  echo "\$b = {$b}\n";

  $a = 5; //$bも同じ値になる
  echo "\$a = {$a}\n";
  echo "\$b = {$b}\n";
?>