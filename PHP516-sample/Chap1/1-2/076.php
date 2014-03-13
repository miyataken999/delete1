<?php
  //stock（在庫数）の要素の降順でソートするコールバック関数
  function stock_sort($value1, $value2) {
    if($value1['stock'] === $value2['stock']) {
      return 0;
    }
    return ($value1['stock'] > $value2['stock']) ? -1 : 1;
  }

  $fruits = array(
    array('name' => "いちご", 'stock' => 70),
    array('name' => "みかん", 'stock' => 260),
    array('name' => "りんご", 'stock' => 90),
    array('name' => "ぶどう", 'stock' => 110),
    array('name' => "メロン", 'stock' => 240),
    array('name' => "バナナ", 'stock' => 60)
  );

  $result = usort($fruits, "stock_sort");

  header("Content-Type: text/plain; charset=UTF-8");

  echo "ソート結果 = ";
  var_dump($result);

  foreach($fruits as $key=>$value) {
    print $value['name']." => ".$value['stock']."個\n";
  }
?>