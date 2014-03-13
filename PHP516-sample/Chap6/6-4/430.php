<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>複合条件を指定する</title>
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

echo "◆「出版日が2010/01/01以降」で、且つ、「著者名が杉山正二または板橋こずえ」のレコードを検索<br />";
$c = new Criteria();
$crit_publish = $c->getNewCriterion(BookPeer::PUBLISH_DATE, '2010-01-01', Criteria::GREATER_EQUAL);
$crit_author1 = $c->getNewCriterion(BookPeer::AUTHOR, '杉山 正二', Criteria::EQUAL);
$crit_author2 = $c->getNewCriterion(BookPeer::AUTHOR, '板橋 こずえ', Criteria::EQUAL);
$crit_author1->addOr($crit_author2);
$crit_publish->addAnd($crit_author1);
$c->add($crit_publish);
$books = BookPeer::doSelect($c);
_disp_books($books);

echo "★生成されたSQL：<br />";
print_r($c->toString());

?>
</body>
</html>
