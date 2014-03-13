<?php
  $array_var = array(
    "あ", "え", "い", "う", "え", "お", "あ", "お"
  );

  header("Content-Type: text/plain; charset=UTF-8");

  //空の配列の要素数
  $array_counts = array_count_values($array_var);
  foreach($array_counts as $key => $value) {
    echo "{$key} = {$value}個\n";
  }
?>
