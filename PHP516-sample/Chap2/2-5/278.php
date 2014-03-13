<?php
  header("Content-Type: text/plain; charset=UTF-8");

  ob_start();
  echo "フラッシュされる文字列1\n";
  ob_end_flush();

  ob_start();
  echo "消去される文字列1\n";
  ob_end_clean();

  ob_start();

  echo "消去される文字列2\n";
  ob_clean();

  echo "フラッシュされる文字列2\n";
  ob_flush();
  flush();

  echo "消去される文字列3\n";
  ob_end_clean();
?>