<?php
  $fruits = array(
    "strawberry" => 70,
    "orange" => 160,
    "apple" => 90,
    "grape" => 110
  );

  header("Content-Type: text/plain; charset=UTF-8");

  //変数名の配列
  $var_count = extract($fruits, EXTR_PREFIX_ALL, "fruit");

  echo "展開された変数の数 = {$var_count}\n";

  echo "\$fruit_strawberry => {$fruit_strawberry}\n";
  echo "\$fruit_orange => {$fruit_orange}\n";
  echo "\$fruit_apple => {$fruit_apple}\n";
  echo "\$fruit_grape => {$fruit_grape}\n";
?>