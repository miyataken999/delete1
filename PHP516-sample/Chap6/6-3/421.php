<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>集合関数を利用する</title>
</head>
<body>
<?php
require_once('config.inc.php');

$books = BookQuery::create()
  ->join('Publisher')
  ->withColumn('Publisher.Name', 'publisherName')
  ->withColumn('AVG(Book.Price)', 'average')
  ->withColumn('SUM(Book.Price)', 'sum')
  ->withColumn('MIN(Book.Price)', 'minimum')
  ->withColumn('MAX(Book.Price)', 'maximum')
  ->withColumn('COUNT(Book.Id)', 'cnt')
  ->groupBy('PublisherId')
  ->find();

echo "◆出版社別の本の価格の集計結果<br />";
echo '<table border="1">';
echo <<< EOM
  <table border="1">
    <th>出版社名</th>
    <th>書籍数</th>
    <th>平均</th>
    <th>合計</th>
    <th>最小</th>
    <th>最大</th>
EOM;
foreach($books as $book){
  echo <<< EOM
    <tr>
      <td>{$book->getPublisherName()}</td>
      <td>{$book->getCnt()}</td>
      <td>{$book->getAverage()}</td>
      <td>{$book->getSum()}</td>
      <td>{$book->getMinimum()}</td>
      <td>{$book->getMaximum()}</td>
    </tr>
EOM;
}
echo "</table>";
?>
</body>
</html>
