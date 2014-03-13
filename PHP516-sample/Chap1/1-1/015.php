<?php
  $x = 15;

  header("Content-Type: text/plain; charset=UTF-8");

  echo ($x >= 10) ? "{$x}は10以上です。\n" : "{$x}は10未満です。\n";
?>