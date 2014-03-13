<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>結果セット取得時に関数をコールする</title>
</head>
<body>
<?php
require_once("config.inc.php");
try {
  function calc_tax($price, $title){
    return array( "price" => number_format( $price * 1.05 ), "title" => $title );
  }

  $pdo = new PDO(DSN, DBUSER, DBPASS, array( PDO::ATTR_EMULATE_PREPARES => false ) );
  $pdo->query("SET NAMES utf8");
  $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  $rows = $pdo->query("SELECT price, title FROM books");
  $records = $rows->fetchAll( PDO::FETCH_FUNC, "calc_tax" );
  echo "◆結果セット取得時に関数をコールする<br />";
  echo '<table border="1">';
  foreach( $records as $rec ){
    echo <<< EOM
  <tr>
    <td>{$rec["title"]}</td>
    <td>{$rec["price"]}</td>
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