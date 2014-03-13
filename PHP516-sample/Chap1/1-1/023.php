<?php
  $num = 1;
  $total = 0;
  header("Content-Type: text/plain; charset=UTF-8");

  while($num <= 10) {
    $total += $num;
    $num++;
  }

  echo "1から10までの合計は{$total}です。\n";
?>