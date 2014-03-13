<?php
  $array1 = array(
    2, 4, 6, 8, 10
  );

  header("Content-Type: text/plain; charset=UTF-8");

  echo "実行前\n";
  foreach($array1 as $key => $value) {
    echo "[{$key}] => {$value}\n";
  }

  //キーを保持したまま要素を逆転する
  $result = array_reverse($array1, TRUE);

  echo "実行後\n";
  foreach($result as $key => $value) {
    echo "[{$key}] => {$value}\n";
  }
?>