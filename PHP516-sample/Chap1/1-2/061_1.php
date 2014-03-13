<?php
  function add_value($value, $add) {
    return ($value + $add);
  }

  //処理対象の配列
  $array_var = array(1, 2, 3, 4, 5);
  //関数の第2引数($add)の配列
  $add_values = array(10, 20, 30, 40, 50);

  header("Content-Type: text/plain; charset=UTF-8");

  echo "実行前\n";
  foreach($array_var as $key => $value) {
    echo "[{$key}] => {$value}\n";
  }

  //$array_varに$add_values配列の各要素の値を加算する
  echo "実行後\n";
  $added_array = array_map("add_value", $array_var, $add_values);
  foreach($added_array as $key => $value) {
    echo "[{$key}] => {$value}\n";
  }
?>