<?php
header("Content-Type: text/html; charset=UTF-8");
echo "■XPath使用時の名前空間のプレフィックスを作成する<br />";
$xml = simplexml_load_file('example2.xml');
$xml->registerXPathNamespace('mybook', 'http://example.com/dtd/book');
$xml->registerXPathNamespace('myreview', 'http://example.com/dtd/review');
foreach( $xml->xpath('//myreview:comment')  as $comment ){
	echo "$comment<br />";
}
?>
