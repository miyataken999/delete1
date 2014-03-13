<?php
  $fruits = array(
    "いちご" => 120,
    "みかん" => 80,
    "りんご" => 300,
    "ぶどう" => 20
  );

  header("Content-Type: text/plain; charset=UTF-8");

  //逆順にソート
  $result = arsort($fruits, SORT_NUMERIC);

  echo "ソート結果 = ";
  var_dump($result);

  echo "ソート後\n";
  foreach($fruits as $key => $value) {
    echo "[{$key}] => {$value}\n";
  }
?>