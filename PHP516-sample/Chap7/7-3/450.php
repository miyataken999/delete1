<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>SQLインジェクションを用いた攻撃</title>
</head>
<body>
<form name="searchform" action="<?php echo $_SERVER["SCRIPT_NAME"]?>" method="GET">
  <input type="text" name="book_title"><br />
  <input type="submit" value="送信">
</form>
<hr>
<?php
if( isset( $_GET["book_title"] ) ){
  define('DBNAME', 'bookspdo');
  define('DBHOST', 'localhost');
  define('DBUSER', 'postgres'); // データベースユーザ名を指定してください
  define('DBPASS', 'postgres'); // パスワードを指定してください
  define('DSN', "host=" . DBHOST . " dbname=" . DBNAME . " user=" . DBUSER . " password=" . DBPASS);
  if( !$db = pg_connect( DSN ) ){
    exit("データベース処理エラー");
  }
  $sql = <<< EOM
    SELECT title, author FROM books
    WHERE title LIKE '%{$_GET["book_title"]}%'
EOM;
  echo '◆検索結果<br />';
  echo '<table border="1">';
  $res = pg_query( $db, $sql );
  while( $row = pg_fetch_array( $res ) ){
    echo <<< EOM
        <tr>
          <td>{$row["title"]}</td>
          <td>{$row["author"]}</td>
        </tr>
EOM;
  }
  echo "</table>";
}
?>
</body>
</html>