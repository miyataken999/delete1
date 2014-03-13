<?php
header("Content-type: text/html; charset=UTF-8");
require_once("./spyc-0.5/spyc.php");
echo "■YAMLファイルを読み込む<br />";
$yml = Spyc::YAMLLoad('example1.yml'); 
echo "<pre>";
print_r($yml);
echo "</pre>";

echo "■YAMLファイルを読み込む<br />";
$yml = Spyc::YAMLLoad('example2.yml'); 
echo "<pre>";
print_r($yml);
echo "</pre>";

?>