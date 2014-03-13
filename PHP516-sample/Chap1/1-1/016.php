<?php
  $string_var1 = 'あいうえお';
  $string_var2 = 'かきくけこ';

  header("Content-Type: text/plain; charset=UTF-8");

  //結合演算子による結合
  echo $string_var1.$string_var2."\n";

  //文字列に変数を代入することによる結合
  echo "{$string_var1}{$string_var2}"."\n";

  //複合演算子による文字列の結合
  $string_var1 .= $string_var2;
  echo $string_var1;
?>