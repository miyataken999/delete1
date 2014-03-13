<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>SQLをデバッグ出力する</title>
</head>
<body>
<?php
require_once("config.inc.php");

$c = new Criteria();
$c->addJoin(BookPeer::PUBLISHER_ID, PublisherPeer::ID, Criteria::LEFT_JOIN);
$c->add(PublisherPeer::ADDRESS, '東京都%', Criteria::LIKE);

$params = array();
$sql = BasePeer::createSelectSql($c, $params);
echo "◆SQL：<br />";
print_r($sql);
echo "<br /><br />";
echo "◆パラメーター情報：<br />";
print_r($params);

?>
</body>
</html>
