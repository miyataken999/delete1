<?php
header("Content-type: text/html; charset=UTF-8");
echo "■CSVファイルを読み込む<br />";
if( ( $handle = fopen("example1.csv", "r")) === false ){
  die("ファイル読込エラー");
}
echo '<table border="1">';
while( ( $record = fgetcsv( $handle ) ) !== false ){
  echo "<tr>";
  for( $index = 0; $index < count($record); $index++ ){
    $elm = nl2br( mb_convert_encoding($record[$index], "UTF-8", "SJIS") );
    $elm = $elm === "" ? "&nbsp;" : $elm;
    echo "<td>{$elm}</td>";
  }
  echo "</tr>";
}
echo "</table>";
fclose($handle);
?>