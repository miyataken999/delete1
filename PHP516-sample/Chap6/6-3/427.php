<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>トランザクション管理する</title>
</head>
<body>
<?php
require_once('config.inc.php');

$con = Propel::getConnection(BookPeer::DATABASE_NAME);
$con->beginTransaction();
try{
  $review = new Review();
  $review->setBookId(5);
  $review->setReviewer('tarou');
  $review->setReview('とてもいいと思います。');
  $ret = $review->save();
  echo "正常に処理が完了しました。";
  $con->commit();
}catch(Exception $e){
  $con->rollback();
  die("データベースエラー");
}
?>
</body>
</html>
