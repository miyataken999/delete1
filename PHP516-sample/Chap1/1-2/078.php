<?php
  $strawberry = 70;
  $orange = 160;
  $apple = 90;
  $grape = 110;

  header("Content-Type: text/plain; charset=UTF-8");

  $fruits = compact("strawberry", "orange", "apple", "grape");

  echo "変数名を一つずつ引数として渡した結果\n";
  foreach($fruits as $key => $value) {
    echo "[{$key}] => {$value}\n";
  }

  //変数名の配列
  $fruit_names = array("strawberry", "orange", "apple", "grape");
  $fruits = compact($fruit_names);

  echo "変数名の配列を引数として渡した結果\n";
  foreach($fruits as $key => $value) {
    echo "[{$key}] => {$value}\n";
  }
?>