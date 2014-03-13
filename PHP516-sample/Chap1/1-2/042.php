<?php
  $position = array(
    "先頭",
    "真ん中",
    "末尾"
  );

  header("Content-Type: text/plain; charset=UTF-8");

  echo "array_shiftの実行前\n";
  foreach($position as $key => $value) {
    echo "[{$key}] => [{$value}]\n";
  }

  $top = array_shift($position);

  echo "array_shiftの実行後\n";
  echo "\$top = {$top}\n";
  foreach($position as $key => $value) {
    echo "[{$key}] => [{$value}]\n";
  }
?>
