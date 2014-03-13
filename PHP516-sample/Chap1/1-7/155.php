<?php
  header("Content-Type: text/plain; charset=UTF-8");

  //理解できる日付表現
  $sample = strtotime("2011-12-31 12:34:56");
  echo "[2011-12-31 12:34:56] => ".date('Y/m/d(D) H:i:s', $sample)."\n";

  //2011年4月1日から1か月後の日付
  $sample = strtotime("+1 month", mktime(0, 0, 0, 4, 1, 2011));
  echo "[+1 month] => ".date('Y/m/d(D) H:i:s', $sample)."\n";

  //理解できない日付表現
  $sample = strtotime("invalid date");
  echo "[invalid date] => ";
  var_dump($sample);
?>