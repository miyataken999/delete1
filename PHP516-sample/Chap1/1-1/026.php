<?php
  $fruits_array = array("いちご", "みかん", "りんご", "ぶどう");

  header("Content-Type: text/plain; charset=UTF-8");

  foreach($fruits_array as $fruit) {
    echo "{$fruit}\n";
  }
?>