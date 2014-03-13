<?php
  header("Content-Type: text/plain; charset=UTF-8");

  echo "sessionモジュールの関数一覧\n";
  $func_list = get_extension_funcs("session");
  print_r($func_list);
?>