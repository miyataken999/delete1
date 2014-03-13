<?php
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>脆弱なサイトのメールアドレス確認画面</title>
</head>
<body>
あなたが入力したアドレス：<?php echo $_GET["mail"]?><br />
メールアドレスの入力ありがとうございました。
</body>
</html>