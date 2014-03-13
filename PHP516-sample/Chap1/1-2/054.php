<?php
  $array_var = array(
    "a" => "あ", "i" => "い", "u" => "う", "e" => "え", "o" => "お"
  );

  header("Content-Type: text/plain; charset=UTF-8");

  echo "変換前\n";
  foreach($array_var as $key => $value) {
    echo "[{$key}] = {$value}\n";
  }

  $upper_array = array_change_key_case($array_var, CASE_UPPER);

  echo "変換後\n";
  foreach($upper_array as $key => $value) {
    echo "[{$key}] = {$value}\n";
  }
?>
