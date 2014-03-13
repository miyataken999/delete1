<?php
  $position = array(
    "先頭",
    "真ん中",
    "末尾"
  );

  header("Content-Type: text/plain; charset=UTF-8");

  echo "array_popの実行前\n";
  foreach($position as $key => $value) {
    echo "[{$key}] => [{$value}]\n";
  }

  $last = array_pop($position);

  echo "array_popの実行後\n";
  echo "\$last = {$last}\n";
  foreach($position as $key => $value) {
    echo "[{$key}] => [{$value}]\n";
  }
?>
