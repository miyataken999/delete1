<?php
  header("Content-Type: text/plain; charset=UTF-8");

  //ASCII文字コードから文字列に変換
  $string_var = pack("C*", 80, 72, 80);
  var_dump($string_var);
?>
