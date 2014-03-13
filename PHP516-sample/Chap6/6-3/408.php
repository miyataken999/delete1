<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PDOStatementとして結果を取得する</title>
</head>
<body>
<?php
require_once('config.inc.php');

$stmt = BookQuery::create()
  ->setFormatter('PropelStatementFormatter')
  ->find();

  echo "◆PDOStatementとして結果を取得する<br />";
  echo '<table border="1">';
  while( $row = $stmt->fetch( PDO::FETCH_OBJ ) ) {
    echo <<< EOM
  <tr>
    <td>{$row->TITLE}</td>
    <td>{$row->AUTHOR}</td>
  </tr>
EOM;
  }
  echo '</table>';

?>
</body>
</html>
