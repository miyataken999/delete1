<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>結果セットを一括で取得する</title>
</head>
<body>
<?php
require_once("config.inc.php");
try {
  $pdo = new PDO(DSN, DBUSER, DBPASS, array( PDO::ATTR_EMULATE_PREPARES => false ) );
  $pdo->query("SET NAMES utf8");
  $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  $rows = $pdo->query("SELECT title, author FROM books");
  $records = $rows->fetchAll( PDO::FETCH_OBJ );
  echo "◆結果セットを一括で取得する<br />";
  echo '<table border="1">';
  foreach( $records as $rec ){
    echo <<< EOM
  <tr>
    <td>{$rec->title}</td>
    <td>{$rec->author}</td>
  </tr>
EOM;
  }
  echo "</table>";
} catch (PDOException $e) {
  exit("データベース処理エラー");
}

?>
</body>
</html>