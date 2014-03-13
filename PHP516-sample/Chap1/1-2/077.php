<?php
  //果物の名前と在庫数を順番に表示する関数
  function echo_fruit($name, $stock) {
    echo "{$name} => {$stock}個\n";
  }

  //果物名の配列
  $fruit_names = array("strawberry", "orange", "apple", "grape", "melon", "banana");
  //果物の在庫数の配列
  $fruit_stocks = array(70, 160, 90, 110, 90, 90);

  header("Content-Type: text/plain; charset=UTF-8");

  echo "ソート前\n";
  array_map("echo_fruit", $fruit_names, $fruit_stocks);

  //第1ソートキーを在庫数の降順、第2ソートキーを名前の昇順でソートする
  $result = array_multisort($fruit_stocks, SORT_DESC, SORT_NUMERIC,
                            $fruit_names, SORT_ASC, SORT_STRING);

  echo "ソート結果 = ";
  var_dump($result);

  echo "ソート後\n";
  array_map("echo_fruit", $fruit_names, $fruit_stocks);
?>