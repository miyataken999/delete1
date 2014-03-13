<?php session_start();?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>脆弱な投稿サイトの画面</title>
</head>
<body>
日記の書込みが完了しました<br />
<?php echo $_POST["message"] ?>
</body>
</html>