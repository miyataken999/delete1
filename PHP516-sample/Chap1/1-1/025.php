<?php
  $total = 0;
  header("Content-Type: text/plain; charset=UTF-8");

  for($num=1; $num<=10; $num++) {
    $total += $num;
  }
  echo "1から10までの合計は{$total}です。\n";
?>