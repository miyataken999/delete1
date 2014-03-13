<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>関連するテーブルを条件句で絞り込む</title>
</head>
<body>
<?php
require_once('config.inc.php');

$books = BookQuery::create()
  ->usePublisherQuery()
    ->where('Publisher.Address LIKE ?','大阪%')
  ->endUse()
  ->find();

echo "◆関連するテーブルを条件句で絞り込む<br />";
echo '<table border="1">';
foreach($books as $book){
  $publisher = $book->getPublisher();
  echo <<< EOM
  <tr>
    <td>{$book->getTitle()}</td>
    <td>{$book->getAuthor()}</td>
    <td>{$publisher->getName()}</td>
    <td>{$publisher->getAddress()}</td>
  </tr>
EOM;
}
echo "</table>";

?>
</body>
</html>
