<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>結果セットをインスタンスに格納する</title>
</head>
<body>
<?php
class BookClass{
  var $title;
  var $subtitle;
  var $author;
  var $price;
  function calc_tax(){
    return $this->price * 1.05;
  }
}
require_once("config.inc.php");
try {
  $pdo = new PDO(DSN, DBUSER, DBPASS, array( PDO::ATTR_EMULATE_PREPARES => false ) );
  $pdo->query("SET NAMES utf8");
  $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

  $book = new BookClass();
  $book->price = 1500;

  $rows = $pdo->query("SELECT title, subtitle, author FROM books");
  $rows->setFetchMode(PDO::FETCH_INTO, $book);
  $rows->fetch(PDO::FETCH_INTO);

  echo "◆結果セットをインスタンスに格納する<br />";
  echo '<table border="1">';
  echo <<< EOM
  <tr>
    <td>{$book->title}</td>
    <td>{$book->subtitle}</td>
    <td>{$book->price}</td>
    <td>{$book->calc_tax()}</td>
  </tr>
EOM;
  echo '</table>';

} catch (PDOException $e) {
  exit("データベース処理エラー");
}


?>
</body>
</html>
