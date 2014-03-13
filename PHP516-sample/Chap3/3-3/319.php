<?php
header("Content-type: text/html; charset=UTF-8");
echo "■CSVファイルに書込む<br />";
$handle = fopen('result.csv', 'w');
$record1 = array("みるみる分かる,PHPの基礎", "今川泉 絵里子", 2000, "コメント：タイトル通りみるみる分かります。\nおすすめです。" );
fputcsv($handle, $record1);
$record2 = array("StrutsによるMVCモデルの理解", "二本松 あきのり", 1400 );
fputcsv($handle, $record2);
fclose($handle);
?>