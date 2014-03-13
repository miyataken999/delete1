<?php
  //ユーザ関数
  function plus($a, $b) {
    return $a + $b;
  }

  header("Content-Type: text/plain; charset=UTF-8");

  $result = plus(5, 10);
  echo "5 + 10 = {$result}\n";

  $result = plus(-4, 8);
  echo "-4 + 8 = {$result}\n";
?>