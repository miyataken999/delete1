<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>内部結合して抽出する</title>
</head>
<body>
<?php
require_once('config.inc.php');


//抽出するカラム名を指定せず内部結合する
$books = BookQuery::create()
  ->join('Publisher')
  ->find();
echo "◆抽出するカラム名を指定せず内部結合する<br />";
echo '<table border="1">';
foreach($books as $book){
    echo <<< EOM
  <tr>
    <td>{$book->getTitle()}</td>
    <td>{$book->getPublisher()->getName()}</td>
  </tr>
EOM;
}
echo '</table><br />';


//抽出するカラム名を指定して内部結合する
$books = BookQuery::create()
  ->join('Publisher')
  ->select(array('Title', 'Price', 'PublishDate','Publisher.Name'))
  ->find();
echo "◆抽出するカラム名を指定して内部結合する<br />";
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


?>
</body>
</html>
