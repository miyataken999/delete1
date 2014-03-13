<?php
  header("Content-Type: text/plain; charset=UTF-8");

  //文字列から文字コードの配列に変換
  $array_var = unpack("C*", "PHP");
  print_r($array_var);
?>
