<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>結果セットを配列で取得する</title>
</head>
<body>
<?php
require_once('config.inc.php');

$books = BookQuery::create()
  ->setFormatter('PropelArrayFormatter')
  ->find();

echo "◆配列で取得する<br />";
echo '<table border="1">';
foreach($books as $book){
    echo <<< EOM
  <tr>
    <td>{$book["Title"]}</td>
    <td>{$book["Author"]}</td>
  </tr>
EOM;
}
echo "</table>"

?>
</body>
</html>
