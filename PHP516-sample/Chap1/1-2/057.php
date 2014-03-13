<?php
  $array_var = array(
    1, 2, 3
  );

  header("Content-Type: text/plain; charset=UTF-8");

  echo "変更前\n";
  foreach($array_var as $key => $value) {
    echo "[{$key}] = {$value}\n";
  }

  $leftpad = array_pad($array_var, 5, 0);

  echo "左詰された配列\n";
  foreach($leftpad as $key => $value) {
    echo "[{$key}] = {$value}\n";
  }

  $rightpad = array_pad($array_var, -5, 0);

  echo "右詰された配列\n";
  foreach($rightpad as $key => $value) {
    echo "[{$key}] = {$value}\n";
  }
?>
