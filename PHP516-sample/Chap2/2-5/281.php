<?php
  header("Content-Type: text/plain; charset=Shift_JIS");

  //UTF-8の文字をSJISに出力ハンドラでSJISに変換して出力する

  //内部エンコード
  mb_internal_encoding("UTF-8");
  //出力エンコード
  mb_http_output("SJIS");

  ob_start("mb_output_handler");
  echo "この文字はSJISに変換されて出力されます\n";
  ob_end_flush();
?>