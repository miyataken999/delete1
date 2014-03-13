<?php
  $date_string = "06/28/2011";

  header("Content-Type: text/plain; charset=UTF-8");

  echo "[格納変数指定あり]\n";
  $count = sscanf($date_string, "%02d/%02d/%04d", $month, $day, $year);
  echo "格納した変数の数 = {$count}\n";
  printf("%d年%d月%d日\n\n", $year, $month, $day);

  echo "[格納変数指定なし]\n";
  list($mm, $dd, $yyyy) = sscanf($date_string, "%02d/%02d/%04d");
  printf("%d年%d月%d日\n", $yyyy, $mm, $dd);
?>