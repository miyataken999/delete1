<?php
  //無名関数を宣言する
  $plus_function = function($a, $b) {
    return $a + $b;
  };

  header("Content-Type: text/plain; charset=UTF-8");

  //無名関数を実行して戻り値を取得する
  $result = $plus_function(10, 20);
  echo "10 + 20 = {$result}\n";
?>