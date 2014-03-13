<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>条件を自由に記述する</title>
</head>
<body>
<?php
function _disp_books($books){
  echo '<table border="1">';
  foreach($books as $book){
    echo <<< EOM
  <tr>
    <td>{$book->getTitle()}</td>
    <td>{$book->getAuthor()}</td>
    <td>￥{$book->getPrice()}</td>
    <td>{$book->getPublishDate()}</td>
  </tr>
EOM;
  }
  echo "</table><br />";
}

require_once("config.inc.php");

$con = Propel::getConnection(BookPeer::DATABASE_NAME);
echo "◆出版日が本日より6ヶ月前以降のレコードを抽出<br />";
$c = new Criteria();
$today = date("Y-m-d");
$months_ago = date("Y-m-d", strtotime("-6 months"));
$c->add(BookPeer::PUBLISH_DATE, BookPeer::PUBLISH_DATE . " between " . $con->quote($months_ago) . " and " . $con->quote($today), Criteria::CUSTOM);
$books = BookPeer::doSelect($c);
_disp_books($books);

echo "★生成されたSQL：<br />";
print_r($c->toString());

?>
</body>
</html>
