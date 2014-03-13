<?php
  $array_var = array("A", "B", "C", "D", "E");

  header("Content-Type: text/plain; charset=UTF-8");

  echo "キー保持したまま分割した結果\n";
  $array1 = array_chunk($array_var, 2, TRUE);
  print_r($array1);

  echo "キーを保持しないで分割した結果\n";
  $array2 = array_chunk($array_var, 2, FALSE);
  print_r($array2);
?>