<?php
  $array1 = array(
    "A" => 1, "B" => 2, "C" => 3, "D" => 4, "E" => 5, "F" => 6
  );
  $array2 = array(
    "A" => 1, "B" => 3, "C" => 4, "D" => 3, "E" => 5
  );
  $array3 = array(
    "b" => 2, "C" => 3, "A" => 1
  );

  header("Content-Type: text/plain; charset=UTF-8");

  $result = array_diff_assoc($array1, $array2, $array3);

  foreach($result as $key => $value) {
    echo "[{$key}] => [{$value}]\n";
  }

?>