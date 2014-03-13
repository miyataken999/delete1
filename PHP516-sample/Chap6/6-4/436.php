<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>レコード件数を取得する</title>
</head>
<body>
<?php
require_once("config.inc.php");

$c = new Criteria() ;
$c->add(BookPeer::PRICE,2000,Criteria::GREATER_EQUAL);
$count = BookPeer::doCount($c);
echo "2000円以上の書籍が{$count}件存在します。";
?>
</body>
</html>
