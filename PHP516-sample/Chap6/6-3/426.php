<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>SQLを直接実行し、抽出結果をPropelのオブジェクトに格納する</title>
</head>
<body>
<?php
require_once('config.inc.php');

$con = Propel::getConnection(BookPeer::DATABASE_NAME);
$sql = <<< EOM
  SELECT * FROM books
  WHERE price > :price
EOM;
$stmt = $con->prepare($sql);
$stmt->execute(array(':price' => 1500));
$formatter = new PropelObjectFormatter();
$formatter->setClass('Book');
$books = $formatter->format($stmt);

echo "◆SQLを直接実行し、抽出結果をPropelのオブジェクトに格納する<br />";
echo '<table border="1">';
foreach($books as $book){
  echo <<< EOM
  <tr>
    <td>{$book->getTitle()}</td>
    <td>{$book->getAuthor()}</td>
    <td>{$book->getPrice()}</td>
  </tr>
EOM;
}
echo "</table><br />";
?>
</body>
</html>
