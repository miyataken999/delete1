<?php
  function test($x, $y=5) {
    return $x * $y;
  }

  header("Content-Type: text/plain; charset=UTF-8");

  echo test(10)."\n";
  echo test(10,20)."\n";
?>