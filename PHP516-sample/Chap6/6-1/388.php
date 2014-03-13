<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>直近のシーケンス値を取得する。</title>
</head>
<body>
<?php
require_once("config.inc.php");
try {
  $pdo = new PDO(DSN, DBUSER, DBPASS, array( PDO::ATTR_EMULATE_PREPARES => false ) );
  $pdo->query("SET NAMES utf8");
  $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  $sql = <<< EOM
    INSERT INTO books(title, page_num, author, price )
    VALUES('Unicode入門', 341, '大文字 龍平', 1800);
EOM;
  $num = $pdo->exec($sql);
  echo "booksテーブルの最終シーケンス値は" . $pdo->lastInsertId() . "です。";
} catch (PDOException $e) {
  exit("データベース処理エラー".$e->getMessage());
}

?>
</body>
</html>