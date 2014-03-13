<?php
  //偶数の値を持つ要素の合計値を計算する
  function summary($total, $value) {
    if($value % 2 == 0){
      $total += $value;
      return $total;
    }
    else {
      return $total;
    }
  }

  $array_var = array(36, 11, 62, 97, 120);

  header("Content-Type: text/plain; charset=UTF-8");

  $summary = array_reduce($array_var, "summary", 0);
  echo "偶数の値を持つ要素の合計値は、{$summary}です。";
?>