<?php
  $array1 = array(
    7, 48, 20, -19, 0, 6
  );

  header("Content-Type: text/plain; charset=UTF-8");

  echo "ソート前\n";
  foreach($array1 as $key => $value) {
    echo "[{$key}] => {$value}\n";
  }

  $result = sort($array1, SORT_NUMERIC);

  echo "ソート結果 = ";
  var_dump($result);

  echo "ソート後\n";
  foreach($array1 as $key => $value) {
    echo "[{$key}] => {$value}\n";
  }
?>