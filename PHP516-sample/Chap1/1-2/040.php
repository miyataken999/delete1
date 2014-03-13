<?php
  $fruits = array(
    "strawberry" => "いちご",
    "orange" => "みかん",
    "apple" => "りんご",
    "grape" => "ぶどう"
  );

  header("Content-Type: text/plain; charset=UTF-8");

  foreach($fruits as $name_en => $name_ja) {
    echo "[{$name_en}] = {$name_ja}\n";
  }
?>
