<?php
header("Content-type: text/html; charset=UTF-8");
echo "■PHPの配列をJSON形式にする。<br />";
$arr = array("PHP", "Java", "Perl");
echo json_encode($arr);

echo "<br /><br />■PHPの連想配列をJSON形式にする。<br />";
$arr = array("name" => "山下太郎", "address" => "東京都豊島区", "age" => "29" );
echo json_encode($arr);

echo "<br /><br />■PHPの連想配列から構成される配列をJSON形式にする。<br />";
$arr = array(
  array("name" => "山下太郎", "address" => "東京", "age" => "29" ),
  array("name" => "小泉きよ子", "address" => "大阪", "age" => "32" ),
  array("name" => "Jose Luis", "address" => "New York", "age" => "21" ),
);
echo json_encode($arr);

?>