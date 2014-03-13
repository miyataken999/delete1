<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>テーブルを結合して抽出する</title>
</head>
<body>
<?php
function _disp_books($books){
  echo '<table border="1">';
  foreach($books as $book){
    echo <<< EOM
  <tr>
    <td>{$book->getTitle()}</td>
    <td>{$book->getPublisher()->getName()}</td>
    <td>￥{$book->getPrice()}</td>
  </tr>
EOM;
  }
  echo "</table><br />";
}

require_once("config.inc.php");

$c = new Criteria();
$c->addJoin(BookPeer::PUBLISHER_ID, PublisherPeer::ID, Criteria::LEFT_JOIN);
$c->add(PublisherPeer::ADDRESS, '東京都%', Criteria::LIKE);
$books = BookPeer::doSelect($c);
_disp_books($books);

echo "★生成されたSQL：<br />";
print_r($c->toString());

?>
</body>
</html>
