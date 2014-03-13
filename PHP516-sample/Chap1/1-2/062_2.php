<?php
  $array_var = array(0, 1, FALSE, "FALSE", TRUE, "TRUE", 0.0, 1.0);

  header("Content-Type: text/plain; charset=UTF-8");

  echo "抽出前\n";
  foreach($array_var as $key => $value) {
    echo "[{$key}] => ";
    var_dump($value);
  }

  $notfalse_array = array_filter($array_var);

  echo "抽出後\n";
  foreach($notfalse_array as $key => $value) {
    echo "[{$key}] => ";
    var_dump($value);
  }
?>