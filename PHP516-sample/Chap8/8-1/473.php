<?php
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
	echo "あなたのユーザエージェントは".$_SERVER['HTTP_USER_AGENT']."です";
?>
</body>
</html>
