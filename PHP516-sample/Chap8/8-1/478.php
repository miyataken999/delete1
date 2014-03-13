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
	list ($var1,$var2,$var3,$var4) = preg_split ('{[/( -]}',$ua);

	switch (career_type($ua)) {
		case 1:		//ドコモ
			$device_name = $var3;
			break;
		case 2:		//au
			if (strstr($ua,"KDDI")) {
				$device_name = $var2;
			} else {
				$device_name = $var3;
			}
			break;
		case 3:		//SB
			if (strstr($ua,"J-PHONE")) {
				$device_name = $var4;
			} elseif (strstr($ua,"MOT-")) {
				$device_name = $var2;
			} else {
				$device_name = $var3;
			}
			break;		
		case 4:		//EM
			$device_name = substr($var3,0,4);
			break;
		default:	//他
			$device_name = "Unknown";
	}
	
	echo "あなたの機種は".$device_name."です。";

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

