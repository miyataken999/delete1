<?php
  $counter = 1;

  //値渡しカウンター関数
  function increment_by_value($value) {
    $value++;
  }

  //参照渡しカウンター関数
  function increment_by_reference(&$value) {
    $value++;
  }

  header("Content-Type: text/plain; charset=UTF-8");

  echo "値渡し\n";
  increment_by_value($counter);
  echo "\$counter = {$counter}\n";

  echo "参照渡し\n";
  increment_by_reference($counter);
  echo "\$counter = {$counter}\n";
?>