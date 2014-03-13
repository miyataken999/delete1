<?php
  $str_array = array("あ", "a", "ａ", "ア", "ｱ");

  header("Content-Type: text/plain; charset=UTF-8");

  foreach($str_array as $value) {
    echo "[{$value}]の幅 = ".mb_strwidth($value)."\n";
  }

  echo "CR+LFの幅 = ".mb_strwidth("\r\n", "UTF-8")."\n";
?>