<?php


	//位置情報の取得
	$lat = $_GET['lat'];	//ドコモ、au緯度
	$lon = $_GET['lon'];	//ドコモ、au軽度
	if (career_type()==3) {
		$pos = $_GET['pos'];	//SB
	}
	
	//SBはHTTP変数posに緯度、経度が含まれる
	if (career_type() == 3) {
		$lat = substr($pos,1,11);
		$lon = substr($pos,13,12);
	}

	//キャリアによって+記号が入ってるので取り除く
	$lat = str_replace("+","",$lat);
	$lon = str_replace("+","",$lon);

	// ドコモ及びSBは60進法なので10進法に変換
	if ((career_type() == 1) || (career_type() == 3)) {
		$lat = dmsToDeg($lat);
		$lon = dmsToDeg($lon);
	}
	
	//googleマップへリダイレクト
	header("Location: http://www.google.co.jp/maps?ll=".$lat.",".$lon);
	
	function career_type() {
		$ua = $_SERVER['HTTP_USER_AGENT'];
		
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

	function dmsToDeg($dms){
		$dms = array_pad(explode('.',$dms),4,'0');
		$deg = $dms[0] + $dms[1]/60 + ($dms[2].'.'.$dms[3])/3600;
		return round($deg,9);
	}

	header("Content-Type: application/xhtml+xml");
?>

