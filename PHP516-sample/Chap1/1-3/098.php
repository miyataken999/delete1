<?php
  $integer_var = -123;
  $date_array = array(2011, 5, 29);

  header("Content-Type: text/plain; charset=UTF-8");

  echo "printf関数\n";
  printf("整数(-123) = %+08d\n", $integer_var);
  echo "vprintf関数\n";
  vprintf("%04d年%02d月%02d日\n", $date_array);
?>