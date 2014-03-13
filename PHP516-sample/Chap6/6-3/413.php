<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>等価なカラム値を持つレコードを抽出する</title>
</head>
<body>
<?php
require_once('config.inc.php');

$reviews = ReviewQuery::create()->findByBookId(3);
echo "◆book_idカラムの値が3のreviewsレコード<br />";
foreach($reviews as $review){
  echo "{$review->getReview()}<br />";
}

$book = BookQuery::create()->findOneByAuthor('二本松 あきのり');
echo "<br />◆authorカラムの値が「二本松あきのり」のbooksレコード<br />";
echo "{$book->getTitle()}<br />";

?>
</body>
</html>
