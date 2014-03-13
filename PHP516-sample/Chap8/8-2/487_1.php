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
	switch (career_type()) {
		case 1:
			echo '<form action="487_2.php" method="get" lcs>';
			echo '<input type="submit" name="submit" value="現在地を測定!">';
			echo '</form>';
			break;
		case 2:
			echo '<form action="device:gpsone" method="get">';
			echo '<input type="hidden" name="url" value="http://xxxxx.xxxx.xxxx/487_2.php">';
			echo '<input type="hidden" name="ver" value="1">';
			echo '<input type="hidden" name="datum" value="0">';
			echo '<input type="hidden" name="unit" value="1">';
			echo '<input type="hidden" name="acry" value="0">';
			echo '<input type="hidden" name="number" value="0">';
			echo '<input type="submit" name="submit" value="現在地を測定!">';
			echo '</form>';
			break;
		case 3:
			echo '<form action="location:auto?url=/487_2.php" method="get">';
			echo '<input type="submit" name="submit" value="現在地を測定!">';
			echo '</form>';
			break;
	}

	function career_type() {
		$ua = $_SERVER['HTTP_USER_AGENT'];
		echo $ua;
		
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
