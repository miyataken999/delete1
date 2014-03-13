<?php
header("Content-Type: text/html; charset=UTF-8");
echo "■特定の名前空間に属する子ノードを取得する(名前空間をプレフィックス指定)<br />";
echo " ●名前空間「bk」のノードを取得した結果<br />";
$xml = simplexml_load_file('example2.xml');
$book_data = $xml->children("bk", true);
echo "<pre>";
print_r($book_data);
echo "</pre>";

echo " ●名前空間「rv」のノードを取得した結果<br />";
$review_data = $book_data->children("rv", true);
echo "<pre>";
print_r($review_data);
echo "</pre>";
?>
