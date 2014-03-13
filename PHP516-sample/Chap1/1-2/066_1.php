<?php
  //$value1と$value2を10で割った剰余で比較する関数
  function check_odd_value($value1, $value2) {
    $odd_value1 = $value1 % 10;
    $odd_value2 = $value2 % 10;
    if($odd_value1 === $odd_value2) {
      return 0;
    }
    return ($odd_value1 < $odd_value2) ? -1 : 1;
  }

  $array1 = array(1, 2, 3, 4, 5);
  $array2 = array(11, 4, 67, 283, 0);

  header("Content-Type: text/plain; charset=UTF-8");

  $result = array_udiff($array1, $array2, "check_odd_value");

  foreach($result as $key => $value) {
    echo "[{$key}] => {$value}\n";
  }
?>