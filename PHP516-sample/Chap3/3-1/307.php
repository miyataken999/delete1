<?php
header("Content-Type: text/html; charset=UTF-8");
echo "■XPathを使用して名前空間内の要素にアクセスする。<br />";
$xml = simplexml_load_file('example2.xml');
foreach( $xml->xpath('/books/bk:book/bk:title')  as $title ){
	echo "$title <br />";
}
?>