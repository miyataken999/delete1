<?php
  $array1 = array(
    "d" => 4,
    "c" => 3,
    "a" => 1,
    "e" => 5,
    "b" => 2
  );

  header("Content-Type: text/plain; charset=UTF-8");

  echo "ソート前\n";
  foreach($array1 as $key => $value) {
    echo "[{$key}] => {$value}\n";
  }

  $result = ksort($array1, SORT_STRING);

  echo "ソート結果 = ";
  var_dump($result);

  echo "ソート後\n";
  foreach($array1 as $key => $value) {
    echo "[{$key}] => {$value}\n";
  }
?>