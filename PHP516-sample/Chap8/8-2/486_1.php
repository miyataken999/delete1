<?php
	//Smarty�̐ݒ�
	require_once( 'Smarty.class.php' );
	$smarty = new Smarty;
	$smarty->template_dir = '/path/to/file';	//�e���v���[�g�t�@�C���ւ̃p�X	
	$smarty->compile_dir = '/path/to/file';		//�e���v���[�g�t�@�C���ւ̃p�X	
	$smarty->plugins_dir[] ='/path/to/file';	//�e���v���[�g�t�@�C���ւ̃p�X	
	
	//Smarty �t�B���^�[�ݒ�
	$smarty->autoload_filters = array('output' => array('convert_encode'));

	//Content-Type�w�b�_�[
	header("Content-Type: application/xhtml+xml");
	
	$smarty->display('486_2.tpl');

	//�L�����A����
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
