<?php
  $base = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

  header("Content-Type: text/plain; charset=UTF-8");

  echo "元の文字列 = {$base}\n";
  echo "シャッフルされた文字列 = ".str_shuffle($base)."\n";
?>