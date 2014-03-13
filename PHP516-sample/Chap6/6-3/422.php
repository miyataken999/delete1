<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>レコードを更新する</title>
</head>
<body>
<?php
require_once('config.inc.php');

// IDが1のレコードの電話番号とメールアドレスを変更
PublisherQuery::create()
  ->filterById( array(1) )
  ->update( array( 'Tel' => '77-7777-7777', 'Email' => 'new@example.com' ) );

echo "レコードを更新しました";
?>
</body>
</html>