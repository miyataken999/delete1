<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>範囲内のレコードを抽出する</title>
</head>
<body>
<?php
require_once('config.inc.php');

$books = BookQuery::create()
  ->filterByPrice(array(
    'min' => 1000,
    'max' => 2000,
  ))
  ->find();

echo "◆金額が1000円～2000円の書籍一覧<br />";
foreach($books as $book){
  echo "{$book->getTitle()}<br />";
}

?>
</body>
</html>
