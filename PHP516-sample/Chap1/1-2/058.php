<?php
  $kbyte_array = array(
    "1200 KB", "13 KB", "81825 KB", "333 KB"
  );

  $sum_kbyte = array_sum($kbyte_array);

  header("Content-Type: text/plain; charset=UTF-8");

  foreach($kbyte_array as $key => $kbyte) {
    echo "[{$key}] = {$kbyte}\n";
  }

  echo "合計値 {$sum_kbyte} KB\n";
?>
