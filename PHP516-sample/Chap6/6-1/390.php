<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>エラー情報を取得する</title>
</head>
<body>
<?php
require_once("config.inc.php");
try {
  $pdo = new PDO(DSN, DBUSER, DBPASS, array( PDO::ATTR_EMULATE_PREPARES => false ) );
  $pdo->query("SET NAMES utf8");
  $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  $num = $pdo->exec("WRONG SQL");
  echo "更新件数は{$num}件です。";
} catch (PDOException $e) {

  echo "◆PDO::errorInfoメソッドを用いたエラー出力<br />";
  $errorInfo = $pdo->errorInfo();
  echo "SQLSTATEエラーコード：{$errorInfo[0]}<br />";
  echo "ドライバ固有エラーコード：{$errorInfo[1]}<br />";
  echo "エラーメッセージ：{$errorInfo[2]}<br />";

  echo "<br />◆PDOExceptionを用いたエラー出力<br />";
  echo "エラーメッセージ：{$e->getMessage()}<br />";
  echo "エラーコード：{$e->getCode()}<br />";
  echo "エラーが発生したファイル名：{$e->getFile()}<br />";
  echo "エラーが発生した行番号：{$e->getLine()}<br />";
  echo "スタックトレース情報：{$e->getTraceAsString()}<br />";
}
?>
</body>
</html>