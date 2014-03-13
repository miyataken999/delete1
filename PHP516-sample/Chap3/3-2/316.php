<?php
header("Content-type: text/html; charset=UTF-8");
echo "■JSON文字列をPHPの連想配列形式に変換する<br />";
$json = '{"name":"\u5c71\u4e0b\u592a\u90ce","address":"\u6771\u4eac\u90fd\u8c4a\u5cf6\u533a","age":"29"}';
echo "<pre>";
print_r(json_decode($json, true));
echo "</pre>";
?>
