<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>関連するテーブルのレコードを抽出する</title>
</head>
<body>
<?php
require_once('config.inc.php');

$book = BookQuery::create()->findPk(3);
$publisher = $book->getPublisher();
echo "◆{$book->getTitle()}の出版社：{$publisher->getName()}<br />";

echo "◆{$book->getTitle()}のレビュー一覧<br />";
echo '<table border="1">';
$reviews = $book->getReviews();
foreach($reviews as $review){
    echo <<< EOM
  <tr>
    <td>{$review->getReview()}</td>
    <td>{$review->getBookId()}</td>
  </tr>
EOM;
}
echo '</table>';

?>
</body>
</html>
