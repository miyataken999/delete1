<?php
  $fruits = array("strawberry", "grape", "melon", "banana", "orange");

  header("Content-Type: text/plain; charset=UTF-8");

  //英字5文字の要素を検索
  $result = preg_grep('/^[a-z]{5}$/i', $fruits);

  echo "検索結果\n";
  foreach($result as $key => $value) {
    echo "[{$key}] => {$value}\n";
  }
?>