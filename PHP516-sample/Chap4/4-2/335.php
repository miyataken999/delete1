<?php
require_once 'Net/FTP.php';

$host = "localhost";	//接続先FTPサーバホスト名
$port = "21";			//接続先FTPサーバポート
$user = "php";			//FTPサーバログインユーザ
$password = "php500";	//FTPサーバログインパスワード

$ftp = new Net_FTP();
$connect = $ftp->connect($host,$port);

if (PEAR::isError($connect)) {
	echo "接続失敗<br />";
	die();
} else {
	echo "接続成功<br />";
	$login = $ftp->login($user,$password);
	
	if (PEAR::isError($login)) {
		echo "ログイン失敗<br />";
		die();	
	} else {
		echo "ログイン成功<br />";
		
		//ファイルリスト取得
		$file_list = $ftp->ls('./',NET_FTP_DIRS_FILES);
		$delete_files = array();

		foreach ($file_list as $value) {
			if (($value['size'] >= 5000) && ($value['is_dir'] <> 'd')) {	//1000バイト以上でディレクトリではないファイルを削除
				array_push($delete_files,$value['name']);
				$ftp->rm($value['name']);
			}
		}

		echo "以下のファイルを削除しました。<br />";
		foreach ($delete_files as $value) {
			echo $value."<br />";
		}		
	}
} 

$ftp->disconnect();
?>