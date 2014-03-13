<?php
header("Content-Type: text/html; charset=UTF-8");
echo "■メイン・サブの著者を取得する。<br />";
$xml = simplexml_load_file('example.xml');

foreach($xml->book[1]->author as $author){
  if($author["type"] == "main"){
    echo "著者(メイン)：{$author}<br />";
  }
  elseif($author["type"] == "sub"){
    echo "著者(サブ)：{$author}<br />";
  }
}
?>
