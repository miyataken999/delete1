<?php
	//セッションスタート
	session_start();
	
	//セッションIDをリジェネレート
	session_regenerate_id();
	
	//Content-Typeヘッダー
	header("Content-Type: application/xhtml+xml");
?>
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-Type" content="application/xhtml+xml; charset=UTF-8" />
</head>
<body>
<?php

	//セッション変数の表示
	echo "セッション変数:".$_SESSION['PHP500']."<br />";
	
	echo '新しいセッションID:'.session_id().'<br />';
	echo 'セッション名:'.session_name().'<br />';

?>
</body>
</html>