<?php
header("Content-type: text/html; charset=UTF-8");
require_once("./spyc-0.5/spyc.php");
echo "■YAMLファイルを書き出す<br />";
$yml = array(
  "database" => array(
    "item" => array(
      "id" => "bigint",
      "name" => "varchar(10)",
      "price" => "integer",
      "comment" => "longvarchar",
      "created" => "timestamp",
      "updated" => "timestamp",
    )
  )
);
$yml = Spyc::YAMLDump($yml); 
echo "<pre>";
print_r($yml);
echo "</pre>";

echo "■YAMLファイルを書き出す(配列)<br />";
$yml = array(
  "items" => array( "banana", "apple", "kiwi" )
);
$yml = Spyc::YAMLDump($yml); 
echo "<pre>";
print_r($yml);
echo "</pre>";
?>