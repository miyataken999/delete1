<?php
header("Content-type: text/html; charset=UTF-8");
echo "<br /><br />■オブジェクト形式でJSON文字列を出力する。<br />";
$arr = array("PHP", "Java", "Perl");
echo json_encode($arr,JSON_FORCE_OBJECT);
?>