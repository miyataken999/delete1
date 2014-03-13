<?php
  header("Content-Type: text/plain; charset=UTF-8");

  //2011年12月31日 12時34分56秒
  $sample = mktime(12, 34, 56, 12, 31, 2011);
  echo "UNIXエポック({$sample}) => ".date("Y/m/d H:i:s", $sample)."\n";

  //本日の0時
  $today = mktime(0, 0, 0);
  echo "UNIXエポック({$today}) => ".date("Y/m/d H:i:s", $today)."\n";
?>