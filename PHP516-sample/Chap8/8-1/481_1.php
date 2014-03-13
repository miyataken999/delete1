<?php
	//Smarty設定
	require_once( 'Smarty.class.php' );
	$smarty = new Smarty;
	$smarty->template_dir = '/path/to/file';	//テンプレートファイルを保存したディレクトリを指定
	$smarty->compile_dir = '/path/to/file';		//テンプレートファイルを保存したディレクトリを指定
	$smarty->plugins_dir[] ='/path/to/file';	//テンプレートファイルを保存したディレクトリを指定
	
	//Smarty フィルター設定
	$smarty->autoload_filters = array('output' => array('convert_encode'));

	//ヘッダー出力
	header("Content-Type: application/xhtml+xml");
	
	//Smartyテンプレート表示
	$smarty->display('481_3.tpl');
	

	//キャリア判別
	function career_type() {
		$ua = $_SERVER['HTTP_USER_AGENT'];
		if (preg_match("/^DoCoMo/i",$ua)) {
			$career = 1;
		} elseif (preg_match("/^KDDI-|^UP\.Browser/i", $ua)) {
			$career = 2;
		} elseif (preg_match("/^J-PHONE|^Vodafone|^softbank|^MOT-|Netfront/i", $ua)) {
			$career = 3;
		} elseif (preg_match("/emobile/i", $ua)) {
			$career = 4;
		} else {
			$career = 5;
		}
		return $career;
	}
?>