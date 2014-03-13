<?php
header("Content-Type: text/html; charset=UTF-8");
echo "■要素を変更する<br />";
$xml = simplexml_load_file('example.xml');
$xml->book[0]->price = 9999;
echo nl2br( htmlspecialchars($xml->asXML()));
?>
