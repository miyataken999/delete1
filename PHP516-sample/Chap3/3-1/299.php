<?php
header("Content-Type: text/html; charset=UTF-8");
echo "■単一の本の情報を取得する。<br />";
$xml = simplexml_load_file('example.xml');
echo "タイトル：{$xml->book[0]->title}<br />";
echo "著者：{$xml->book[0]->author}<br />";

echo "<br />■本の情報をループで取得する。<br />";
$xml = simplexml_load_file('example.xml');
foreach($xml->book as $book){
  echo "タイトル：{$book->title}<br />";
  echo "著者：{$book->author}<br />";
}

echo "<br />■レビュー情報を取得する。<br />";
$xml = simplexml_load_file('example.xml');
echo "レビュアー：" . $xml->book[0]->reviews->review[0]->{'reviewer-id'} . "<br />";
echo "レビュアー：" . $xml->book[0]->reviews->review[1]->{'reviewer-id'} . "<br />";
?>
