<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>レコードを削除する</title>
</head>
<body>
<?php
require_once('config.inc.php');
$books = BookQuery::create()
  ->filterById(array(3,4))
  ->find();

foreach($books as $book){
  $reviews = $book->getReviews();
  foreach($reviews as $review){
    $review->delete();
  }
  $book->delete();
}
echo "削除完了しました。";
?>
</body>
</html>
