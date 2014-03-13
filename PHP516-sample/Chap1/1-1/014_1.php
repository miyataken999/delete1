<?php
  $x = 15;

  header("Content-Type: text/plain; charset=UTF-8");

  if($x >= 10 && $x <= 20) {
    echo $x."は10以上20未満です。\n";
  }
  else {
  	echo $x."は10以上20未満ではありません。\n";
  }
?>