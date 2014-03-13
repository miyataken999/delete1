<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>疑問符プレースホルダを用いたステートメント実行</title>
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
    WHERE price > ? AND publish_date > ?
EOM;
  $stmt = $pdo->prepare( $sql );
  $stmt->execute( array( 1800, '2011-01-01' ) );
  echo '◆疑問符プレースホルダを用いたステートメント実行結果<br />';
  echo '<table border="1">';
  while( $row = $stmt->fetch( PDO::FETCH_ASSOC ) ) {
    echo <<< EOM
  <tr>
    <td>{$row["title"]}</td>
    <td>{$row["author"]}</td>
  </tr>
EOM;
  }
  echo "</table>";

  $sql = <<< EOM
    SELECT title, author FROM books
    WHERE price > ? AND title LIKE ?
EOM;
  $stmt = $pdo->prepare( $sql );
  $stmt->bindValue(1, 1000, PDO::PARAM_INT);
  $stmt->bindValue(2, '%PHP%', PDO::PARAM_STR);
  $stmt->execute();
  echo '◆疑問符プレースホルダを用いたステートメント実行結果<br />';
  echo '<table border="1">';
  while( $row = $stmt->fetch( PDO::FETCH_ASSOC ) ) {
    echo <<< EOM
  <tr>
    <td>{$row["title"]}</td>
    <td>{$row["author"]}</td>
  </tr>
EOM;
  }
  echo "</table>";

} catch (PDOException $e) {
  exit("データベース処理エラー".$e->getMessage());
}
?>
</body>
</html>