<?php
  header("Content-Type: text/plain; charset=UTF-8");

  echo "gdモジュールは";
  echo (extension_loaded("gd") ? "ロードされています" : "ロードされていません"). "\n";

  echo "ロード済み拡張モジュール一覧\n";
  print_r(get_loaded_extensions());
?>