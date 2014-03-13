<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>レコードを挿入する</title>
</head>
<body>
<?php
require_once('config.inc.php');

$review = new Review();
$review->setBookId(5);
$review->setReviewer('jiro');
$review->setReview('手元に1冊は置いておきたい良書。');
$ret = $review->save();
echo("挿入した件数:{$ret}");

?>
</body>
</html>
