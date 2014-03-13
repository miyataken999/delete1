<?php
header("Content-Type: text/html; charset=UTF-8");
echo "■名前空間情報を取得する<br />";
$xml = simplexml_load_file('example2.xml');
$namespaces = $xml->getDocNamespaces();
echo "<pre>";
print_r($namespaces);
echo "</pre>";
?>
