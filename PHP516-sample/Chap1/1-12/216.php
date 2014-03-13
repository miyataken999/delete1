<?php
  header("Content-Type: text/plain; charset=UTF-8");

  //mbstringモジュールの情報を取得
  $options = ini_get_all("mbstring", TRUE);
  print_r($options);

  echo "ini_get関数\n";
  echo "[memory_limit] => ".ini_get("memory_limit")."\n";

  echo "get_cfg_var関数\n";
  echo "[cfg_file_path] => ".get_cfg_var("cfg_file_path")."\n";
?>