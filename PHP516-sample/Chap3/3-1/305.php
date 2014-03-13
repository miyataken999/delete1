<?php
header("Content-Type: text/html; charset=UTF-8");
echo "■子要素の数を取得する<br />";
$xml = simplexml_load_file('example.xml');
echo "レビューの数：" . $xml->book[0]->reviews->review->count();
?>
