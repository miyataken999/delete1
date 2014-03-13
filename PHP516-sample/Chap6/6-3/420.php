<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Limit,Offset指定で抽出する</title>
</head>
<body>
<?php
require_once('config.inc.php');

$books = BookQuery::create()
  ->orderByPrice()
  ->offset(3)
  ->limit(2)
  ->find();

echo "◆limit句、offset句を指定して抽出した結果<br />";
echo '<table border="1">';
foreach($books as $book){
    echo <<< EOM
  <tr>
    <td>{$book->getTitle()}</td>
    <td>{$book->getPrice()}</td>
  </tr>
EOM;
}
echo "</table>";

?>
</body>
</html>
