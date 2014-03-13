<?php
// session.use_trans_sidが1, session.use_cookiesが0, session.use_only_cookiesが0の状態で実行される前提です。
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>脆弱な携帯サイトの画面</title>
</head>
<body>
<a href="linkpage2.php">同一サイト内でのリンクです。</a>
</body>
</html>