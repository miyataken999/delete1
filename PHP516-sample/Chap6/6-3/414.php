<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>LIKE句で抽出する</title>
</head>
<body>
<?php
require_once('config.inc.php');

$books = BookQuery::create()
  ->filterByTitle('%MVC%')
  ->find();

echo "◆LIKE句による抽出結果<br />";
foreach($books as $book){
  echo "{$book->getTitle()}<br />";
}

?>
</body>
</html>
