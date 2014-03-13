<?php
  $fruits = array(
    "いちご",
    "みかん",
    "りんご",
    "ぶどう"
  );

  header("Content-Type: text/plain; charset=UTF-8");

  //各変数に配列の値を代入する
  list($strawberry, $orange, $apple, $grape) = $fruits;
  echo "\$stawberry = {$strawberry}\n";
  echo "\$orange = {$orange}\n";
  echo "\$apple = {$apple}\n";
  echo "\$grape = {$grape}\n";
?>
