<?php
header("Content-Type: text/html; charset=UTF-8");
echo "■XMLを変数からロードする<br />";
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
$xml = simplexml_load_string($xmlstr);
echo "タイトル：{$xml->book[0]->title}<br />";
?>
