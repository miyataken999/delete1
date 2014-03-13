<?php
  $array_var = array(
    "a" => "あ", "i" => "い", "u" => "う", "e" => "え", "o" => "お"
  );

  header("Content-Type: text/plain; charset=UTF-8");

  echo "逆転前\n";
  foreach($array_var as $key => $value) {
    echo "[{$key}] = {$value}\n";
  }

  $flipped = array_flip($array_var);

  echo "逆転後\n";
  foreach($flipped as $key => $value) {
    echo "[{$key}] = {$value}\n";
  }
?>
