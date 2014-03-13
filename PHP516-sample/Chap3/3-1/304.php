<?php
header("Content-Type: text/html; charset=UTF-8");
echo "■子ノードを取得する<Br />";
$xml = simplexml_load_file('example.xml');
$children = $xml->book[1]->children();
foreach($children as $key => $val){
  echo "ノード名：{$key}　　値：{$val}<br />";
}
?>
