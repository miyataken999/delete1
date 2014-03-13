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
	$client_ipadr = $_SERVER['REMOTE_ADDR'];
	$client_strIpadr = ip2long($client_ipadr);	//インターネットアドレス表記に変換
	
	$cidr_range = array(
		'docomo' => array(
			//ドコモ
			'210.153.84.0/24',
			'210.136.161.0/24',
			'210.153.86.0/24',
			'124.146.174.0/24',
			'124.146.175.0/24',
			'202.229.176.0/24',
			'202.229.177.0/24',
			'202.229.178.0/24',
		),
		'au' => array(		
			//au
			'210.230.128.224/28',
			'121.111.227.160/27',
			'61.117.1.0/28',
			'219.108.158.0/27',
			'219.125.146.0/28',
			'61.117.2.32/29',
			'61.117.2.40/29',
			'219.108.158.40/29',
			'219.125.148.0/25',
			'222.5.63.0/25',
			'222.5.63.128/25',
			'222.5.62.128/25',
			'59.135.38.128/25',
			'219.108.157.0/25',
			'219.125.145.0/25',
			'121.111.231.0/25',
			'121.111.227.0/25',
			'118.152.214.192/26',
			'118.159.131.0/25',
			'118.159.133.0/25',
			'118.159.132.160/27',
			'111.86.142.0/26',
			'111.86.141.64/26',
			'111.86.141.128/26',
			'111.86.141.192/26',
			'118.159.133.192/26',
			'111.86.143.192/27',
			'111.86.143.224/27',
			'111.86.147.0/27',
			'111.86.142.128/27',
			'111.86.142.160/27',
			'111.86.142.192/27',
			'111.86.142.224/27',
			'111.86.143.0/27',
			'111.86.143.32/27',
			'111.86.147.32/27',
			'111.86.147.64/27',
			'111.86.147.96/27',
			'111.86.147.128/27',
			'111.86.147.160/27',
			'111.86.147.192/27',
			'111.86.147.224/27',
		),
		'sb' => array(
			//SB
			'123.108.237.0/27',
			'202.253.96.224/27',
			'210.146.7.192/26',
		),
	);

	//キャリア判定
	$check_flg = false;
	foreach ($cidr_range as $key => $value) {
		foreach ($value as $value2) {
			list($net,$mask) = preg_split("/\//",$value2);
			$career_Ipmask = ~((1 << (32 - $mask)) - 1);
			$career_netAddr = ip2long($net);
			
			$client_strIpadrNetAddr = $client_strIpadr & $career_Ipmask;
			
			if ($client_strIpadrNetAddr == $career_netAddr ) {
				echo "あなたのキャリアは".$key."です。";
				$check_flg = true;
				break 2;
			}
		}
	}
	
	if (!$check_flg) {
		echo "モバイル端末以外からのアクセスです。";
	}
?>
</body>
</html>

