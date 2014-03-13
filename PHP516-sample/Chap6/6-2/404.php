<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Propelの動作確認をする</title>
</head>
<body>
<?php
require_once('config.inc.php');
$books = BookQuery::create()->find();
foreach($books as $book){
  echo "{$book->getTitle()}<br />";
}
?>
</body>
</html>
