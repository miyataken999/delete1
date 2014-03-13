<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>複雑な複合条件を生成する</title>
</head>
<body>
<?php
require_once('config.inc.php');

$books = BookQuery::create()
  ->condition('cond1', 'Book.Title LIKE ?', '%IT%') 
  ->condition('cond2', 'Book.Subtitle LIKE ?', '%IT%') 
  ->combine(array('cond1', 'cond2'), 'or', 'cond12') 
  ->condition('cond3', 'Book.Price >= ?', 1000) 
  ->condition('cond4', 'Book.Price <= ?', 2000) 
  ->combine(array('cond3', 'cond4'), 'and', 'cond34') 
  ->combine(array('cond12', 'cond34'), 'and', 'cond1234') 
  ->where(array('cond1234'))
  ->find();

echo "◆複雑な複合条件を生成する<br />";
echo '<table border="1">';
foreach($books as $book){
    echo <<< EOM
  <tr>
    <td>{$book->getTitle()}</td>
    <td>{$book->getSubtitle()}</td>
    <td>{$book->getAuthor()}</td>
  </tr>
EOM;
}
echo "</table>";
?>
</body>
</html>
