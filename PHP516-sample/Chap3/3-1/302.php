<?php
header("Content-Type: text/html; charset=UTF-8");
echo "■XPathを使用して要素にアクセスする。<br />";
$xml = simplexml_load_file('example.xml');
foreach ($xml->xpath('//title') as $title) {
  echo $title."<br />";
}

echo "<br />■XPathを使用して要素にアクセスする。<br />";
$xml = simplexml_load_file('example.xml');
foreach ($xml->xpath('/books/book/price') as $price) {
  echo $price."<br />";
}
?>
