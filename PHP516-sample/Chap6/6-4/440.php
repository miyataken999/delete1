<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>トランザクション管理する</title>
</head>
<body>
<?php
require_once("config.inc.php");

$con = Propel::getConnection(BookPeer::DATABASE_NAME);
$con->beginTransaction();
try{
  $c = new Criteria();
  $c->add(BookPeer::TITLE, 'トランザクション管理の極意');
  $c->add(BookPeer::PAGE_NUM, 100);
  $c->add(BookPeer::AUTHOR, '郡山 喜平');
  $c->add(BookPeer::PRICE, 1200);
  $c->add(BookPeer::PUBLISH_DATE, '2011-01-11');
  $ret = BasePeer::doInsert($c, $con);
  echo "正常に処理が完了しました。";
  $con->commit();
}catch(Exception $e){
  $con->rollback();
  die("データベースエラー");
}
?>
</body>
</html>
