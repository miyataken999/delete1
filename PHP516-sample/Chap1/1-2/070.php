<?php
  header("Content-Type: text/plain; charset=UTF-8");

  $step3_array = range(0, 15, 3);

  echo "0から15までの3の倍数の配列\n";
  foreach($step3_array as $key => $value) {
    echo "[{$key}] => {$value}\n";
  }

  $step3_array = range(15, 0, 3);

  echo "上限値と下限値を逆転して指定\n";
  foreach($step3_array as $key => $value) {
    echo "[{$key}] => {$value}\n";
  }
?>