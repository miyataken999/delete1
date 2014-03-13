<?php
header("Content-type: text/html; charset=UTF-8");
echo "■配列形式のJSON文字列をデコードする<br />";
$json = '["PHP","Java","Perl"]';
print_r(json_decode($json));

echo "<br /><br />■オブジェクト形式のJSON文字列をデコードする<br />";
$json = '{"name":"\u5c71\u4e0b\u592a\u90ce","address":"\u6771\u4eac\u90fd\u8c4a\u5cf6\u533a","age":"29"}';
echo "<pre>";
print_r(json_decode($json));
echo "</pre>";

echo "■オブジェクトから構成されるJSON配列をデコードする";
$json = '[{"name":"\u5c71\u4e0b\u592a\u90ce","address":"\u6771\u4eac","age":"29"},{"name":"\u5c0f\u6cc9\u304d\u3088\u5b50","address":"\u5927\u962a","age":"32"},{"name":"Jose Luis","address":"New York","age":"21"}]';
echo "<pre>";
print_r(json_decode($json));
echo "</pre>";
?>