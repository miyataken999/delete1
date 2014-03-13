<?php
require_once 'Net/FTP.php';

$host = "localhost";	//接続先FTPサーバホスト名
$port = "21";			//接続先FTPサーバポート
$user = "php";			//FTPサーバログインユーザ
$password = "php500";	//FTPサーバログインパスワード
$uploadfile = "./uploadfile.txt";	//アップロードを行うファイル

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
		
		$upload = $ftp->put($uploadfile,'./uploaded_file.txt',true,FTP_ASCII);
		if (PEAR::isError($upload)) {
			echo "アップロード失敗<br />";
			die();
		} else {
			echo "アップロード成功<br />";
		}
	}
} 

$ftp->disconnect();
?>