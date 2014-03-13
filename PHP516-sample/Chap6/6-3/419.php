<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>順序を指定し抽出する</title>
</head>
<body>
<?php
require_once('config.inc.php');

$books = BookQuery::create()
  ->orderByPrice()
  ->find();

echo "◆価格の昇順でソートした結果<br />";
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


$books = BookQuery::create()
  ->orderByPrice('desc')
  ->find();

echo "◆価格の降順でソートした結果<br />";
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
