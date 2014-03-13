<?php
  $array1 = array(
    "A" => 1, "B" => 2, "C" => 3
  );
  $array2 = array(
    "D" => 4, "E" => 5, "F" => 6, "A" => 10
  );

  header("Content-Type: text/plain; charset=UTF-8");

  $result = array_merge($array1, $array2);

  echo "array_mergeの結果\n";
  foreach($result as $key => $value) {
    echo "[{$key}] => {$value}\n";
  }

  $result = array_merge_recursive($array1, $array2);

  echo "array_merge_recursiveの結果\n";
  foreach($result as $key => $value) {
    if(is_array($value)) {
      //配列の場合には表示方法変更
      foreach($value as $key2 => $value2) {
        echo "[{$key}][{$key2}] => {$value2}\n";
      }
    }
    else {
      echo "[{$key}] => {$value}\n";
    }
  }

  $result = $array1 + $array2;

  echo "\$array1 + \$array2の結果\n";
  foreach($result as $key => $value) {
    echo "[{$key}] => {$value}\n";
  }

?>