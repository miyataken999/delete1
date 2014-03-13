<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>SQLインジェクションによる不正ログイン</title>
</head>
<body>
<form name="searchform" action="<?php echo $_SERVER["SCRIPT_NAME"]?>" method="POST">
  ID：<input type="text" name="login_id"><br />
  パスワード：<input type="text" name="password"><br />
  <input type="submit" value="送信">
</form>
<hr>
<?php
if( !empty( $_POST["login_id"] ) && !empty( $_POST["password"] ) ){
  define('DBNAME', 'bookspdo');
  define('DBHOST', 'localhost');
  define('DBUSER', 'postgres'); // データベースユーザ名を指定してください
  define('DBPASS', 'postgres'); // パスワードを指定してください。
  define('DSN', "host=" . DBHOST . " dbname=" . DBNAME . " user=" . DBUSER . " password=" . DBPASS);
  if( !$db = pg_connect( DSN ) ){
    exit("データベース処理エラー");
  }
  $sql = <<< EOM
    SELECT id FROM users WHERE login_id = '{$_POST["login_id"]}'
    AND password = '{$_POST["password"]}'
EOM;
  $res = pg_query( $db, $sql );
  if( $row = pg_fetch_array( $res ) ){
    echo "ログインに成功しました。";
  }else{
    echo "ログインに失敗しました。";
  }
}
?>
</body>
</html>