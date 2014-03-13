<?php
	header("Content-Type: text/html;");
?>

<html>
<head>
<meta http-equiv="content-Type" content="text/html; charset=UTF-8" />
</head>
<body>

<?php
	//スマートフォンユーザエージェント定義マップ
	$sp_ua = array(
		'iOS'				=> array(
								'iOS3'		=> 'iPhone\ OS\ 3',
								'iOS4'		=> 'iPhone\ OS\ 4',
								'iPad'		=> 'iPad',
								),
		'Android'			=> array(
								'Android2.2'=>	'Android\ 2\.2',	
								'Android2.1'=>	'Android\ 2\.1',	
								'Android3.0'=>	'Android\ 3\.0',
								'Android1.6'=>	'Mobile\ Safari',
								),
		'Windows Mobile'	=> array(
								'WM5.1'		=> 'SC\-01B',
								'WM6.5'		=> 'MSIEMobile\ 6\.5',
								),
		'BlackBerry'		=> array(
								'BlackBerry'	=> 'BlackBerry'
								),
	);

	//ユーザエージェント取得
	$ua = $_SERVER['HTTP_USER_AGENT'];
	$os="";
	$device="";
	foreach ($sp_ua as $key => $value) {
		foreach ($value as $key2 => $value2) {
			if (preg_match('/'.$value2.'/', $ua)) {
				$os = $key;
				$device = $key2;
				break;
			}		
		}
	}

	if ($os) {
			echo "スマートフォンからのアクセスです<br />";
			echo "OSは".$device."です。";
	} else {
			echo "スマートフォンではありません<br />";
	}	

?>
</body>
</html>
