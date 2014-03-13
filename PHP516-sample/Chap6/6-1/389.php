<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>トランザクション管理する</title>
</head>
<body>
<?php
require_once("config.inc.php");
function show_transaction(&$pdo){
  if( $pdo->inTransaction() ){
    echo "現在、トランザクション内です。<br />";
  }else{
    echo "現在、トランザクション外です。<br />";
  }
}
try {
  $pdo = new PDO(DSN, DBUSER, DBPASS, array( PDO::ATTR_EMULATE_PREPARES => false ) );
  $pdo->query("SET NAMES utf8");
  $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  $pdo->setAttribute( PDO::ATTR_AUTOCOMMIT, false );
   show_transaction( $pdo );
  echo "トランザクション開始します..<br />";
  $pdo->beginTransaction();
  show_transaction( $pdo );
  echo "更新系SQLを実行します..<br />";
  //エラーを発生させ、ロールバックを試すには以下のコメントアウトを外してください。
  //$num = $pdo->exec("UPDATE books SET author != '今川泉 絵里子' WHERE id = '1'");
  $num = $pdo->exec("UPDATE books SET author = '今川泉 絵里子' WHERE id = '1'");
  echo "コミットします..<br />";
  $pdo->commit();
  show_transaction( $pdo );
} catch (PDOException $e) {
  echo "ロールバックします..<br />";
  $pdo->rollBack();
}
// commit または rollback 後は、オートコミットに戻ることに注意してください。
?>
</body>
</html>