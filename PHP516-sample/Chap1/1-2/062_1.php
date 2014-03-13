<?php
  function over200_filter($value) {
    return ($value > 200);
  }

  $array_var = array(100, 200, 300, 400, 500);

  header("Content-Type: text/plain; charset=UTF-8");

  $over200_array = array_filter($array_var, "over200_filter");
  foreach($over200_array as $key => $value) {
    echo "[{$key}] => {$value}\n";
  }
?>