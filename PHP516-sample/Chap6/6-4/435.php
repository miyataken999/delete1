<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>集合関数を利用する</title>
</head>
<body>
<?php
function _disp_books($books){
  echo "◆出版社別の本の価格の集計結果<br />";
  echo <<< EOM
    <table border="1">
      <th>出版社ID</th>
      <th>平均</th>
      <th>合計</th>
      <th>最小</th>
      <th>最大</th>
      <th>書籍数</th>
EOM;
  foreach($books as $book){
    echo <<< EOM
  <tr>
    <td>{$book["PUBLISHER_ID"]}</td>
    <td>￥{$book["average"]}</td>
    <td>￥{$book["maximum"]}</td>
    <td>￥{$book["minimum"]}</td>
    <td>￥{$book["sum"]}</td>
    <td>{$book["count"]}</td>
  </tr>
EOM;
  }
  echo "</table><br />";
}

require_once("config.inc.php");
$c = new Criteria();
$c->clearSelectColumns(); 
$c->addGroupByColumn(BookPeer::PUBLISHER_ID);
$c->addSelectColumn(BookPeer::PUBLISHER_ID) ;  // <-- selectで取り出すカラムを並べていく
$c->addSelectColumn('avg('.BookPeer::PRICE.') as average '); 
$c->addSelectColumn('max('.BookPeer::PRICE.') as maximum '); 
$c->addSelectColumn('min('.BookPeer::PRICE.') as minimum '); 
$c->addSelectColumn('sum('.BookPeer::PRICE.') as sum '); 
$c->addSelectColumn('count('.BookPeer::PRICE.') as count '); 
$books = BasePeer::doSelect($c);              // <-- BasePeerを直接書くところに注意
_disp_books($books);
?>
</body>
</html>
