<?php
  header("Content-Type: text/plain; charset=UTF-8");

  for($num=0; $num<=5; $num++) {
  	//$var1のような変数に番号を代入
    $var_name = "var{$num}";
    $$var_name = $num;
  }

  echo "\$var1 = {$var1}\n";
  echo "\$var2 = {$var2}\n";
  echo "\$var3 = {$var3}\n";
  echo "\$var4 = {$var4}\n";
  echo "\$var5 = {$var5}\n";
?>