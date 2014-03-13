<?php
  header("Content-Type: text/plain; charset=UTF-8");
  $x = 4;
  $x += 3;
  echo "(\$x += 3) => {$x}\n";
  $string_var = "あいうえお";
  $string_var .= "かきくけこ";  //文字列の連結
  echo "\$string_var => {$string_var}\n";
?>