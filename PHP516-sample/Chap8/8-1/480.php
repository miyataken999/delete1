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
	switch (career_type($ua)) {
		case 1:		//ドコモ
			$pixels = "Unknown";
			break;
		case 2:		//au
			$pixels = $_SERVER['HTTP_X_UP_DEVCAP_SCREENPIXELS'];
			break;
		case 3:		//SB
			$pixels = $_SERVER['HTTP_X_JPHONE_DISPLAY'];
			break;
		case 4:		//EM
			$pixels = "Unknown";
			break;
		default:	//他
			$pixels = "Unknown";
	}
	
	echo "画面解像度は".$pixels."です。";

	function career_type($ua) {
		if (preg_match("/^DoCoMo/i",$ua)) {
			$career = 1;
		} elseif (preg_match("/^KDDI-|^UP\.Browser/i", $ua)) {
			$career = 2;
		} elseif (preg_match("/^J-PHONE|^Vodafone|^softbank|^MOT-/i", $ua)) {
			$career = 3;
		} elseif (preg_match("/emobile/i", $ua)) {
			$career = 4;
		} else {
			$career = 5;
		}
		return $career;
	}
?>
</body>
</html>
