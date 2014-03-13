<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>全件抽出する</title>
</head>
<body>
<?php
require_once("config.inc.php");

$c = new Criteria();
$books = BookPeer::doSelect($c);
echo '<table border="1">';
foreach($books as $book){
    echo <<< EOM
  <tr>
    <td>{$book->getTitle()}</td>
    <td>{$book->getAuthor()}</td>
  </tr>
EOM;
}
echo "</table>"
?>
</body>
</html>
