<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>主キー指定で抽出する</title>
</head>
<body>
<?php
require_once('config.inc.php');

$book = BookQuery::create()->findPk(3);

echo "◆ID:3の書籍名<br />";
echo "{$book->getTitle()}<br />";

echo "◆ID:3 および ID:4 の書籍名<br />";
$books = BookQuery::create()->findPKs( array( 3, 4 ) );
foreach($books as $book){
  echo $book->getTitle() . "<br />";
}

?>
</body>
</html>
