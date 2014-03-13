<?php
  //値に接尾語をつける関数
  function add_suffix(&$fruit_value, $fruit_name, $suffix) {
    $fruit_value .= $suffix;
  }

  $fruits = array(
    "いちご" => 30,
    "みかん" => 17,
    "りんご" => 46,
    "ぶどう" => 8
  );

  header("Content-Type: text/plain; charset=UTF-8");

  echo "実行前\n";
  foreach($fruits as $key => $value) {
    echo "[{$key}] => [{$value}]\n";
  }

  $result = array_walk($fruits, "add_suffix", " 個");

  echo "実行後\n";
  echo "実行結果 = ";
  var_dump($result);

  foreach($fruits as $key => $value) {
    echo "[{$key}] => [{$value}]\n";
  }

?>