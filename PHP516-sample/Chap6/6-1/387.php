<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>例外時の挙動を設定する</title>
</head>
<body>
<?php
require_once("config.inc.php");
error_reporting(E_ALL ^ E_NOTICE);
$pdo = new PDO(DSN, DBUSER, DBPASS, array( PDO::ATTR_EMULATE_PREPARES => false ) );
$pdo->query("SET NAMES utf8");
$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
$num = $pdo->exec("UPDATE books SET price != '2000' WHERE id = '1'"); // 故意にSQLを間違える
echo "更新件数は{$num}件です。";
?>
</body>
</html>