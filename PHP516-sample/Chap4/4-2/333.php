<?php
require_once 'Net/FTP.php';

$host = "localhost";	//接続先FTPサーバホスト名
$port = "21";			//接続先FTPサーバポート
$user = "php";			//FTPサーバログインユーザ
$password = "php500";	//FTPサーバログインパスワード
$download_file = "./download_file.txt";	//ダウンロードを行うファイル

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
		
		$download = $ftp->get($download_file,'./downloaded_file.txt',true,FTP_ASCII);
		if (PEAR::isError($download)) {
			echo "ダウンロード失敗<br />";
			die();
		} else {
			echo "ダウンロード成功<br />";
		}
	}
} 

$ftp->disconnect();
?>