<?php
  $array_var = array(
    "a" => "あ", "i" => "い", "u" => "う", "e" => "え", "o" => "お"
  );

  header("Content-Type: text/plain; charset=UTF-8");

  //内部ポインタを先頭にセットする
  reset($array_var);
  while(list($key, $value) = each($array_var)) {
    echo "[{$key}] = {$value}\n";
  }
?>
