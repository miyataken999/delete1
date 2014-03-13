<?php
  $array1 = array(
    "case-1", "case-2", "case-19", "case-23", "case-5"
  );

  header("Content-Type: text/plain; charset=UTF-8");

  $result = sort($array1, SORT_STRING);

  echo "sort関数での文字列ソート後\n";
  foreach($array1 as $key => $value) {
    echo "[{$key}] => {$value}\n";
  }

  $result = natsort($array1);

  echo "natsort関数でのソート後\n";
  foreach($array1 as $key => $value) {
    echo "[{$key}] => {$value}\n";
  }
?>