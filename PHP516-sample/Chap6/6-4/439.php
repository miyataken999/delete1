<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>レコードを削除する</title>
</head>
<body>
<?php
require_once("config.inc.php");

$con = Propel::getConnection(ReviewPeer::DATABASE_NAME);

$c = new Criteria();
$c->add(BookPeer::ID, array(3,4), Criteria::IN);
$books = BookPeer::doSelect($c);
foreach($books as $book){
  $reviews = $book->getReviews();
  foreach($reviews as $review){
    $c = new Criteria();
    $c->add(ReviewPeer::ID, $review->getId());
    ReviewPeer::doDelete($c);
  }
  $c = new Criteria();
  $c->add(BookPeer::ID, $book->getId());
  BookPeer::doDelete($book->getId());
}
echo "削除完了しました。";
//全削除をする場合はdoDeleteAll()を用います
//ex) $ret = ReviewPeer::doDeleteAll();

?>
</body>
</html>
