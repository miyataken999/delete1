<?php
  $array1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
  $array2 = array(1, 3, 5, 7, 4, 9, 10);

  header("Content-Type: text/plain; charset=UTF-8");

  $result = array_diff($array1, $array2);

  foreach($result as $key => $value) {
    echo "[{$key}] => [{$value}]\n";
  }

?>