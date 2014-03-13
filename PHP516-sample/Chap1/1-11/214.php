<?php
  header("Content-Type: text/plain; charset=UTF-8");

  //匿名関数を作成する
  $plus_function = create_function('$a, $b', 'return $a + $b;');

  //匿名関数を実行して戻り値を取得する
  $result = $plus_function(10, 20);
  echo "10 + 20 = {$result}\n";
?>