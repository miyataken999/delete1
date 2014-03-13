<?php
  $array_var = array(TRUE, 0, 0.0, "ABCDEFG", NULL);

  header("Content-Type: text/plain; charset=UTF-8");

  echo "print_r関数での表示\n";
  print_r($array_var);

  echo "var_dump関数での表示\n";
  var_dump($array_var);

  echo "var_export関数での表示\n";
  var_export($array_var);
?>