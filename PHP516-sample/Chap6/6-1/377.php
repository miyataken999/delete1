<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>データベースに接続する</title>
</head>
<body>
<?php
$dbtype = 'mysql';
$dbname = 'bookspdo'; // データベース名を指定してください。
$dbhost = 'localhost';
$dbuser = 'root'; // データベースユーザ名(一般ユーザ)を指定してください。
$dbpass = 'mysql'; // パスワードを指定してください。
try {
  $pdo = new PDO("{$dbtype}:dbname={$dbname};host={$dbhost}", $dbuser, $dbpass);
} catch (PDOException $e) {
  exit("データベースに接続できませんでした。");
}
echo "データベースへの接続に成功しました。";
?>
</body>
</html>
