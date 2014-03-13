<?php
  header("Content-Type: text/plain; charset=UTF-8");

  echo "検出文字コード = ".mb_detect_encoding("PHP", "UTF-8,ASCII")."\n";
?>