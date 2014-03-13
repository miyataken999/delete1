<?php
  header("Content-Type: text/plain; charset=UTF-8");

  $length = strlen("ABCDEFG");
  echo "「ABCDEFG」の長さ = {$length}\n";

  $length = strlen("");
  echo "空の文字の長さ = {$length}\n";

  $length = strlen(NULL);
  echo "NULL文字の長さ = {$length}\n";
?>