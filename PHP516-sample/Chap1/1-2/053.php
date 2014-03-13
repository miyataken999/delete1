<?php
  $array_var = array(
    "a" => "あ", "i" => "い", "u" => "う", "e" => "え", "o" => "お"
  );

  header("Content-Type: text/plain; charset=UTF-8");

  foreach(array_values($array_var) as $arrayvalue_key => $arrayvalue_value) {
    echo "[{$arrayvalue_key}] = {$arrayvalue_value}\n";
  }
?>
