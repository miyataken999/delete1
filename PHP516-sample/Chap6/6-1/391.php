<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>名前付きプレースホルダを用いたプリペアードステートメント実行</title>
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
    WHERE price > :price AND publish_date > :publish_date
EOM;

  $stmt = $pdo->prepare( $sql );
  $stmt->execute( array( ':price' => 1800, ':publish_date' => '2011-01-01' ) );
  echo '◆名前付きプレースホルダを用いたステートメント実行結果<br />';
  echo '<table border="1">';
  while( $row = $stmt->fetch( PDO::FETCH_ASSOC ) ) {
    echo <<< EOM
  <tr>
    <td>{$row["title"]}</td>
    <td>{$row["author"]}</td>
  </tr>
EOM;
  }
  echo '</table>';

  $sql = <<< EOM
    SELECT title, author FROM books
    WHERE price > :price AND title LIKE :title
EOM;
  $stmt = $pdo->prepare( $sql );
  $stmt->bindValue(':price', 1000, PDO::PARAM_INT);
  $stmt->bindValue(':title', '%PHP%', PDO::PARAM_STR);
  $stmt->execute();
  echo '◆名前付きプレースホルダを用いたステートメント実行結果<br />';
  echo '<table border="1">';
  while( $row = $stmt->fetch( PDO::FETCH_ASSOC ) ) {
    echo <<< EOM
  <tr>
    <td>{$row["title"]}</td>
    <td>{$row["author"]}</td>
  </tr>
EOM;
  }
  echo '</table>';


} catch (PDOException $e) {
  exit("データベース処理エラー".$e->getMessage());
}
?>
</body>
</html>