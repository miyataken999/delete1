<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>条件指定で抽出する</title>
</head>
<body>
<?php
function _disp_books($books){
  echo '<table border="1">';
  foreach($books as $book){
    echo <<< EOM
  <tr>
    <td>{$book->getTitle()}</td>
    <td>{$book->getSubtitle()}</td>
    <td>{$book->getAuthor()}</td>
    <td>￥{$book->getPrice()}</td>
  </tr>
EOM;
  }
  echo "</table><br />";
}

require_once("config.inc.php");

echo "◆IDが3または4のレコードを抽出<br />";
$c = new Criteria();
$c->add(BookPeer::ID, array(3,4), Criteria::IN);
$books = BookPeer::doSelect($c);
_disp_books($books);

echo "◆サブタイトルがNULLのレコードを抽出<br />";
$c = new Criteria();
$c->add(BookPeer::SUBTITLE, null, Criteria::ISNULL);
$books = BookPeer::doSelect($c);
_disp_books($books);

echo "◆サブタイトルがNOT NULLのレコードを抽出<br />";
$c = new Criteria();
$c->add(BookPeer::SUBTITLE, null, Criteria::ISNOTNULL);
$books = BookPeer::doSelect($c);
_disp_books($books);

echo "◆著者名が犬飼 智佳子のレコードを抽出<br />";
$c = new Criteria();
$c->add(BookPeer::AUTHOR, '犬飼 智佳子', Criteria::EQUAL);
$books = BookPeer::doSelect($c);
_disp_books($books);

echo "◆価格が1500円以上のレコードを抽出<br />";
$c = new Criteria();
$c->add(BookPeer::PRICE, 1500, Criteria::GREATER_EQUAL);
$books = BookPeer::doSelect($c);
_disp_books($books);

echo "◆著者名が「板橋 こずえ」または「丘の原　空」のレコードを抽出<br />";
$c = new Criteria();
$c->add(BookPeer::AUTHOR, array('板橋 こずえ','丘の原　空'), Criteria::IN);
$books = BookPeer::doSelect($c);
_disp_books($books);

echo "◆タイトルに「MVC」の文字列を含むレコードを抽出<br />";
$c = new Criteria();
$c->add(BookPeer::TITLE, '%MVC%', Criteria::LIKE);
$books = BookPeer::doSelect($c);
_disp_books($books);

?>
</body>
</html>
