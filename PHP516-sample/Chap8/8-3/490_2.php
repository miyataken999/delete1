<?php
	require_once( 'Smarty.class.php' );
	$smarty = new Smarty;
	$smarty->template_dir = '/path/to/file';	//テンプレートファイルへのパス	
	$smarty->compile_dir = '/path/to/file';		//テンプレートファイルへのパス	
	$smarty->plugins_dir[] ='/path/to/file';	//テンプレートファイルへのパス	
	
	//Smarty フィルター設定
	$smarty->autoload_filters = array('output' => array('emoji'));

	//ヘッダー出力
	header("Content-Type: application/xhtml+xml");
	
	//Smartyテンプレート表示
	$smarty->display('490_3.tpl');	

	//キャリア判別スマートフォン対応版	
	function career_type() {
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
									'BlackBerry'	=> 'BlackBerry',
									),
			'docomo'			=> array(
									'docomo'	=> '^DoCoMo',
									),
			'au'			=> array(
									'au'	=> '^KDDI-|^UP\.Browser',
									),
			'sb'			=> array(
									'sb'	=> '^J-PHONE|^Vodafone|^softbank|^MOT-',
									),
		);

		$os="";
		$device="";
		$ua = $_SERVER['HTTP_USER_AGENT'];
		foreach ($sp_ua as $key => $value) {
			foreach ($value as $key2 => $value2) {
				if (preg_match('/'.$value2.'/', $ua)) {
					$os = $key;
					$device = $key2;
					break;
				}		
			}
		}

		return array($os,$device);
	}

?>