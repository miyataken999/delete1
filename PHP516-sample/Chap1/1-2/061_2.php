<?php
  //処理対象の配列
  $array_var = array(1, 2, 3, 4, 5);
  $array_var2 = array(10, 20, 30, 40, 50);

  header("Content-Type: text/plain; charset=UTF-8");

  echo "実行前\n";
  foreach($array_var as $key => $value) {
    echo "[{$key}] => {$value}\n";
  }

  echo "実行後\n";
  $added_array = array_map(NULL, $array_var, $array_var2);
  foreach($added_array as $key1 => $value1) {
    foreach($value1 as $key2 => $value2)
    echo "[{$key1}][{$key2}] => {$value2}\n";
  }
?>