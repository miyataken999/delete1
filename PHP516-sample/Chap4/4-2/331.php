<?php
require_once 'Net/FTP.php';

$host = "localhost";	//接続先FTPサーバホスト名
$port = "21";			//接続先FTPサーバポート
$user = "php";			//FTPサーバログインユーザ
$password = "php500";	//FTPサーバログインパスワード

$ftp = new Net_FTP();
$connect = $ftp->connect($host,$port);

if (!PEAR::isError($connect)) {
	echo "接続成功<br />";
	$login = $ftp->login($user,$password);
	
	if (!PEAR::isError($login)) {
		echo "ログイン成功<br />";
	} else {
		echo "ログイン失敗<br />";
	}
} else {
	echo "接続失敗<br />";
}

$ftp->disconnect();
?>