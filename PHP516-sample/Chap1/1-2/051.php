<?php
  $array_var = array(
    "あ", "い", "う", "え", "お"
  );

  header("Content-Type: text/plain; charset=UTF-8");

  //先頭の要素
  echo "先頭の要素 = ".reset($array_var)."\n";
  //2番目の要素
  echo "その次の要素 = ".next($array_var)."\n";
  //末尾の要素
  echo "末尾の要素 = ".end($array_var)."\n";
  //一つ前の要素
  echo "その前の要素 = ".prev($array_var)."\n";
  //現在の要素のキー
  echo "現在の要素のキー = ".key($array_var)."\n";
  //現在の要素の値
  echo "現在の要素の値 = ".current($array_var)."\n";
?>
