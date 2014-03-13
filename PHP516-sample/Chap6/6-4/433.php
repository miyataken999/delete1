<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Limit,Offset指定で抽出する</title>
</head>
<body>
<?php
function _disp_books($books){
  echo '<table border="1">';
  foreach($books as $book){
    echo <<< EOM
  <tr>
    <td>{$book->getId()}</td>
    <td>{$book->getTitle()}</td>
    <td>{$book->getAuthor()}</td>
    <td>￥{$book->getPrice()}</td>
  </tr>
EOM;
  }
  echo "</table>";
}

require_once("config.inc.php");

echo "◆オフセット1から3件抽出<br />";
$c = new Criteria();
$c->addAscendingOrderByColumn(BookPeer::ID);
$c->setOffset(1);
$c->setLimit(3);
$books = BookPeer::doSelect($c);
_disp_books($books);

?>
</body>
</html>
