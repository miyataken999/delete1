<?php
  header("Content-Type: text/plain; charset=UTF-8");
  $x = 7;
  $x++;
  echo '$x++の結果 = '.$x."\n";
  $x = 7;
  ++$x;
  echo '++$xの結果 = '.$x."\n";
  $x = 7;
  $x--;
  echo '$x--の結果 = '.$x."\n";
  $x = 7;
  --$x;
  echo '--$xの結果 = '.$x."\n";
  ?>