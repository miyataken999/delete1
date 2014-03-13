<?php
  //キーの大文字小文字を区別しないで比較する関数
  function check_key_value($key1, $key2) {
    $key1_value = strtoupper($key1); //大文字に変換
    $key2_value = strtoupper($key2); //大文字に変換
    //文字列比較関数の結果
    return strcmp($key1_value, $key2_value);
  }

  //値を10で割った剰余で比較する関数
  function check_odd_value($value1, $value2) {
    $odd_value1 = $value1 % 10;
    $odd_value2 = $value2 % 10;
    if($odd_value1 === $odd_value2) {
      return 0;
    }
    return ($odd_value1 < $odd_value2) ? -1 : 1;
  }

  $array1 = array(
    "a" => 1, "b" => 2, "c" => 3, "d" => 4, "e" => 5
  );
  $array2 = array(
    "a" => 11, "b" => 2, "C" => 33, "D" => 4, "Z" => 55
  );

  header("Content-Type: text/plain; charset=UTF-8");

  echo "array_udiff_assocによる差分\n";
  $result = array_udiff_assoc($array1, $array2, "check_odd_value");
  foreach($result as $key => $value) {
    echo "[{$key}] => {$value}\n";
  }

  echo "array_diff_uassocによる差分\n";
  $result = array_diff_uassoc($array1, $array2, "check_key_value");
  foreach($result as $key => $value) {
    echo "[{$key}] => {$value}\n";
  }

  echo "array_udiff_uassocによる差分\n";
  $result = array_udiff_uassoc($array1, $array2, "check_odd_value", "check_key_value");
  foreach($result as $key => $value) {
    echo "[{$key}] => {$value}\n";
  }
?>