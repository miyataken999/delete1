<?php
  //2進数を10進数に変換して代入する
  $x = bindec("00100110");	//10進数の38
  $y = bindec("01101101");	//10進数の109

  header("Content-Type: text/plain; charset=UTF-8");

  //数値を2進数で表示
  printf("\$x = %08b\n", $x);
  printf("\$y = %08b\n", $y);

  //$xと$yの論理積
  printf("\$x & \$y = %08b\n", ($x & $y));
  //$xと$yの論理和
  printf("\$x | \$y = %08b\n", ($x | $y));
  //$xと$yの排他的論理和
  printf("\$x | \$y = %08b\n", ($x ^ $y));
  //$xを4ビット左シフト（結果を16ビット表示）
  printf("\$x << 4 = %016b\n", ($x << 4));
  //$xを4ビット右シフト
  printf("\$x >> 4 = %08b\n", ($x >> 4));
?>