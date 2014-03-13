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
	$ua = $_SERVER['HTTP_USER_AGENT'];
	if (preg_match("/^DoCoMo/i",$ua)) {
		echo "ドコモ";
	} elseif (preg_match("/^KDDI-|^UP\.Browser/i", $ua)) {
		echo "au";
	} elseif (preg_match("/^J-PHONE|^Vodafone|^softbank|^MOT-/i", $ua)) {
		echo "SB";
	} elseif (preg_match("/emobile/i", $ua)) {
		echo "EM";		
	} else {
		echo "PCですか？";
	}
?>
</body>
</html>

