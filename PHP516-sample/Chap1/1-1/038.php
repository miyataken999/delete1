<?php
  function plus($a, $b) {
    return $a + $b;
  }
  //関数名を代入する
  $plus_function = "plus";

  header("Content-Type: text/plain; charset=UTF-8");

  //可変関数を実行して戻り値を取得する
  $result = $plus_function(10, 20);
  echo "10 + 20 = {$result}\n";
?>