<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>プリペアードステートメントのデバッグ</title>
</head>
<body>
<?php
require_once("config.inc.php");
try {
  $pdo = new PDO(DSN, DBUSER, DBPASS, array( PDO::ATTR_EMULATE_PREPARES => false ) );
  $pdo->query("SET NAMES utf8");
  $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

  $sql = <<< EOM
    SELECT title, author FROM books
    WHERE price > :price AND title LIKE :title
EOM;
  $stmt = $pdo->prepare( $sql );
  $stmt->bindValue(':price', 1000, PDO::PARAM_INT);
  $stmt->bindValue(':title', '%PHP%', PDO::PARAM_STR);
  $stmt->execute();
  $stmt->debugDumpParams();

  // 以下のように記述する事で、出力を抑制し、変数に保存する事も可能
  // ob_start();
  // $stmt->debugDumpParams();
  // $debug = ob_get_contents();
  // ob_end_clean();

} catch (PDOException $e) {
  exit("データベース処理エラー".$e->getMessage());
}
?>
</body>
</html>