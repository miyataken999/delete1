<?php
  $array_var = array(
    "a" => "あ", "i" => "い", "u" => "う", "e" => "え", "o" => "お"
  );

  header("Content-Type: text/plain; charset=UTF-8");

  foreach(array_keys($array_var) as $arraykey_key => $arraykey_value) {
    echo "[{$arraykey_key}] = {$arraykey_value}\n";
  }
?>
