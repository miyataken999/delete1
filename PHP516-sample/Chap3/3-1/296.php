<?php
header("Content-Type: text/html; charset=UTF-8");
echo "■XMLをファイルからロードする<br />";
$xml = simplexml_load_file('example.xml');
echo "タイトル：{$xml->book[0]->title}<br />";
?>
