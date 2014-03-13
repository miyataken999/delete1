<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>レコードを更新する</title>
</head>
<body>
<?php
require_once("config.inc.php");

$select_c = new Criteria();
$select_c->add(BookPeer::ID , array(1,3) , Criteria::IN);

$update_c = new Criteria();
$update_c->add(BookPeer::CDROM_FLAG, 1);
$con = Propel::getConnection(BookPeer::DATABASE_NAME);
$ret = BasePeer::doUpdate($select_c, $update_c, $con);
echo "更新したレコード数は{$ret}件です。";

?>
</body>
</html>
