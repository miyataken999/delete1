<?php
  $fruits = array(
    "いちご", "みかん", "すいか", "とまと", "たまねぎ", "りんご", "ぶどう"
  );

  header("Content-Type: text/plain; charset=UTF-8");

  echo "array_splice実行前\n";
  foreach($fruits as $key => $value) {
    echo "[{$key}] => [{$value}]\n";
  }

  $del_fruits = array_splice($fruits, 2, 3, array("メロン", "バナナ"));

  echo "array_splice実行後\n";
  foreach($fruits as $key => $value) {
    echo "[{$key}] => [{$value}]\n";
  }

  echo "削除された要素\n";
  foreach($del_fruits as $key => $value) {
    echo "[{$key}] => [{$value}]\n";
  }

?>
