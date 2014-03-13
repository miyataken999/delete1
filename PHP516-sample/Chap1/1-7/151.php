<?php
  header("Content-Type: text/plain; charset=UTF-8");

  $now = time();

  echo "getdate関数\n";
  print_r(getdate($now));

  echo "localtime関数\n";
  print_r(localtime($now));
  print_r(localtime($now, TRUE));

  echo "gettimeofday関数\n";
  echo "現在時刻 => ".gettimeofday(TRUE)."\n";
  print_r(gettimeofday(FALSE));
?>