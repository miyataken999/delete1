<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>全件抽出する</title>
</head>
<body>
<?php
require_once('config.inc.php');
$books = BookQuery::create()->find();

echo "◆全件抽出する<br />";
echo '<table border="1">';
foreach($books as $book){
    echo <<< EOM
  <tr>
    <td>{$book->getTitle()}</td>
    <td>{$book->getAuthor()}</td>
  </tr>
EOM;
}
echo "</table>";
?>
</body>
</html>
