<?php
header("Content-Type: text/html; charset=UTF-8");
echo "■DOMノードをSimpleXMLElementオブジェクトに変換する<br />";
$dom = new DOMDocument;
$xmlstr = <<< XML
<?xml version="1.0" encoding="UTF-8"?>
<books>
 <book>
  <title>StrutsによるMVCモデルの理解</title>
  <author type="main">二本松 あきのり</author>
  <author type="sub">小林 松男</author>
  <price>1500</price>
 </book>
 <book>
  <title>IT企業統計年鑑</title>
  <author></author>
  <price>3800</price>
 </book>
</books>
XML;
$dom->loadXML($xmlstr);
$xml = simplexml_import_dom($dom);
echo "タイトル：{$xml->book[0]->title}<br />";
?>
