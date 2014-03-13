<?php
header("Content-Type: text/html; charset=UTF-8");
echo "■要素名を取得する<br />";
$xml = simplexml_load_file('example.xml');
foreach($xml->book[0]->children() as $child){
  echo "{$child->getName()}<br />";
}
?>