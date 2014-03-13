<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>外部結合して抽出する</title>
</head>
<body>
<?php
require_once('config.inc.php');

//左側外部結合する
$books = BookQuery::create()
  ->leftJoin('Publisher')
  ->select(array('Title', 'Price', 'PublishDate','Publisher.Name'))
  ->find();

echo "◆左側外部結合する<br />";
echo '<table border="1">';
foreach($books as $book){
    echo <<< EOM
  <tr>
    <td>{$book["Title"]}</td>
    <td>{$book["Publisher.Name"]}</td>
  </tr>
EOM;
}
echo '</table><br />';

//右側外部結合する
$publishers = PublisherQuery::create()
  ->rightJoin('Book')
  ->select(array('Book.Title', 'Book.Price', 'Book.PublishDate','Publisher.Name'))
  ->find();

echo "◆右側外部結合する<br />";
echo '<table border="1">';
foreach($publishers as $publisher){
    echo <<< EOM
  <tr>
    <td>{$publisher["Book.Title"]}</td>
    <td>{$publisher["Publisher.Name"]}</td>
  </tr>
EOM;
}
echo '</table>';

?>
</body>
</html>
