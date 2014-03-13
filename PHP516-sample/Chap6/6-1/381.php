<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>結果セットをオブジェクトで取得する</title>
</head>
<body>
<?php
require_once("config.inc.php");
try {
  $pdo = new PDO(DSN, DBUSER, DBPASS, array( PDO::ATTR_EMULATE_PREPARES => false ) );
  $pdo->query("SET NAMES utf8");
  $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

  $rows = $pdo->query("SELECT title, author FROM books");
  echo "◆結果セットをオブジェクトで取得する<br />";
  echo '<table border="1">';
  while( $row = $rows->fetch( PDO::FETCH_OBJ  ) ) {
    echo <<< EOM
  <tr>
    <td>{$row->title}</td>
    <td>{$row->author}</td>
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