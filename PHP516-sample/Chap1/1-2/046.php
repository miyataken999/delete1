<?php
  $planets = array(
    "水星", "金星", "地球", "火星", "木星", "土星", "天王星", "海王星", "冥王星"
  );

  header("Content-Type: text/plain; charset=UTF-8");

  //5つ目から8つ目までの要素を取り出す
  $gas_planets = array_slice($planets, 4, 4);

  foreach($gas_planets as $key => $value) {
    echo "[{$key}] => [{$value}]\n";
  }
?>
