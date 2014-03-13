<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>更新系SQLを発行する</title>
</head>
<body>
<?php
require_once("config.inc.php");
try {
  $pdo = new PDO(DSN, DBUSER, DBPASS, array( PDO::ATTR_EMULATE_PREPARES => false ) );
  $pdo->query("SET NAMES utf8");
  $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  $num = $pdo->exec("UPDATE books SET price = '2000' WHERE id = '1'");
  echo "更新件数は{$num}件です。";
} catch (PDOException $e) {
  exit("データベース処理エラー");
}
?>
</body>
</html>