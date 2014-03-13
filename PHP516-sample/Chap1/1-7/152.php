<?php
  header("Content-Type: text/plain; charset=UTF-8");

  $now = time();

  echo "date関数\n";
  echo date("Y/m/d(D) H:i:s", $now), "\n";

  echo "gmdate関数\n";
  echo gmdate("Y/m/d(D) H:i:s", $now), "\n";

  echo "strftime関数\n";
  echo strftime("%Y/%m/%d(%a) %H:%M:%S", $now), "\n";

  echo "gmstrftime関数\n";
  echo gmstrftime("%Y/%m/%d(%a) %H:%M:%S", $now), "\n";
?>