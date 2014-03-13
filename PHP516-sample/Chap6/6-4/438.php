<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>レコードを挿入する</title>
</head>
<body>
<?php
require_once("config.inc.php");

// doInsertメソッドを使った方法
$c = new Criteria();
$c->add(ReviewPeer::BOOK_ID, 5);
$c->add(ReviewPeer::REVIEWER, 'ken0129');
$c->add(ReviewPeer::REVIEW, 'とても参考になりました。');
$con = Propel::getConnection(ReviewPeer::DATABASE_NAME);
$ret = BasePeer::doInsert($c, $con);
echo("insertしたID:{$ret}");

?>
</body>
</html>
