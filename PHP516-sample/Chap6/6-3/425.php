<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>SQLを直接記述する</title>
</head>
<body>
<?php
require_once('config.inc.php');

$con = Propel::getConnection(BookPeer::DATABASE_NAME);
echo get_class($con) . "のインスタンスを取得しました。<br />";
$sql = <<< EOM
  SELECT * FROM books
  WHERE price > :price
EOM;
$stmt = $con->prepare($sql);
$stmt->execute(array(':price' => 1500));

echo "◆SQLを直接記述する<br />";
echo '<table border="1">';
while( $book = $stmt->fetch( PDO::FETCH_OBJ ) ){
  echo <<< EOM
  <tr>
    <td>{$book->title}</td>
    <td>{$book->author}</td>
    <td>{$book->price}</td>
  </tr>
EOM;
}
echo "</table><br />";

?>
</body>
</html>
