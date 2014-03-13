<?php
  //1から10までの要素を持つ配列
  $numbers = range(1, 5);

  header("Content-Type: text/plain; charset=UTF-8");

  echo "シャッフル前\n";
  foreach($numbers as $key => $value) {
    echo "[{$key}] => {$value}\n";
  }

  $result = shuffle($numbers);

  echo "シャッフル結果 = ";
  var_dump($result);

  echo "シャッフル後\n";
  foreach($numbers as $key => $value) {
    echo "[{$key}] => {$value}\n";
  }
?>