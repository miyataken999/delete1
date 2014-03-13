<?php
  $num_str = '1234';

  header("Content-Type: text/plain; charset=UTF-8");

  echo "元の文字列 = {$num_str}\n";
  echo "ゼロ埋め右寄せ12桁 = ".str_pad($num_str, 12, "0", STR_PAD_LEFT)."\n";
  echo "ゼロ埋め左寄せ12桁 = ".str_pad($num_str, 12, "0", STR_PAD_RIGHT)."\n";
  echo "ゼロ埋め中央寄せ12桁 = ".str_pad($num_str, 12, "0", STR_PAD_BOTH)."\n";
?>