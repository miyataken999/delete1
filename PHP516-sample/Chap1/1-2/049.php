<?php
  header("Content-Type: text/plain; charset=UTF-8");

  //空の配列の要素数
  $array_count = count(array());
  echo "要素数 = {$array_count}\n";

  //要素が9つある配列の要素数
  $array_count = count(array(1, 2, 3, 4, 5, 6, 7, 8, 9));
  echo "要素数 = {$array_count}\n";

  //配列でない変数の処理結果
  $array_count = count("文字列");
  echo "要素数 = {$array_count}\n";
?>
