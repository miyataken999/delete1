<?php
  $fruits = array(
    "いちご", "みかん", "すいか", "とまと", "たまねぎ", "りんご", "ぶどう"
  );

  header("Content-Type: text/plain; charset=UTF-8");

  $rand_key = array_rand($fruits);
  echo "1つ目 = ".$fruits[$rand_key]."\n";

  $rand_key = array_rand($fruits);
  echo "2つ目 = ".$fruits[$rand_key]."\n";
?>
