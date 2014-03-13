<?php
	require_once( 'Smarty.class.php' );
	$smarty = new Smarty;
	$smarty->template_dir = '/path/to/file';	//テンプレートファイルへのパス	
	$smarty->compile_dir = '/path/to/file';		//テンプレートファイルへのパス	
	$smarty->plugins_dir[] ='/path/to/file';	//テンプレートファイルへのパス	
	
	//Smarty フィルター設定
	$smarty->autoload_filters = array('output' => array('extcss'));

	//ヘッダー出力
	header("Content-Type: application/xhtml+xml");
	
	//Smartyテンプレート表示
	$smarty->display('488_3.tpl');	

?>