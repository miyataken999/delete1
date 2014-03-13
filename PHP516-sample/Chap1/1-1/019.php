<?php
  $year = 2011;

  header("Content-Type: text/plain; charset=UTF-8");

  //閏年の判定
  //4で割り切れ、かつ100で割り切れない年、もしくは400で割り切れる年が閏年
  if(($year % 4 === 0 && $year % 100 !== 0) || $year % 400 === 0) {
    echo "{$year}年は閏年である\n";
  }
  else {
    echo "{$year}年は閏年ではない\n";
  }
?>