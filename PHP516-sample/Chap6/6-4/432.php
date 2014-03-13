<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>順序を指定し抽出する</title>
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
  </tr>
EOM;
  }
  echo "</table>";
}

require_once("config.inc.php");

echo "◆価格の昇順でソート<br />";
$c = new Criteria();
$c->addAscendingOrderByColumn(BookPeer::PRICE);
$books = BookPeer::doSelect($c);
_disp_books($books);

echo "<br />◆価格の降順でソート<br />";
$c = new Criteria();
$c->addDescendingOrderByColumn(BookPeer::PRICE);
$books = BookPeer::doSelect($c);
_disp_books($books);

?>
</body>
</html>
