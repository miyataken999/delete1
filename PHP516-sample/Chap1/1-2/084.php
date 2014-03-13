<?php
  $names = array("いちご", "みかん", "りんご", "ぶどう");
  $stocks = array(75, 120, 35, 18);

  header("Content-Type: text/plain; charset=UTF-8");

  $fruits = array_combine($names, $stocks);

  foreach($fruits as $name => $stock) {
    echo "[{$name}] => {$stock}\n";
  }
?>