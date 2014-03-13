<?php
header("Content-Type: text/html; charset=UTF-8");
echo "■メイン・サブの著者を取得する。<br />";
$xml = simplexml_load_file('example.xml');
$author_info = $xml->book[1]->author->attributes();
echo "<pre>";
print_r($author_info);
echo "</pre>";

?>