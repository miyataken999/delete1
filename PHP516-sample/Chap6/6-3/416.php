<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>WHERE句を直接記述する</title>
</head>
<body>
<?php
require_once('config.inc.php');

$books = BookQuery::create()
  ->where('Book.Title like ?', '%IT%')
//  ->where('Book.Subtitle like ?', '%IT%')
  ->find();
echo "◆AND条件での検索結果<br />";
foreach($books as $book){
  echo "{$book->getTitle()}<br />";
}

$books = BookQuery::create()
  ->where('Book.Title like ?', '%IT%')
  ->orWhere('Book.Subtitle like ?', '%IT%')
  ->find();
echo "◆OR条件での検索結果<br />";
foreach($books as $book){
  echo "{$book->getTitle()}<br />";
}

?>
</body>
</html>
