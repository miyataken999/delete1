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
		$download_list = array();

		foreach ($file_list as $value) {
			if ($ftp->mdtm('./'.$value['name']) >= strtotime('-7 days')) {	//ファイルの更新日時が7日以内ならダウンロード
				$download = $ftp->get('./'.$value['name'],'./'.$value['name'],true,FTP_ASCII);
				if (!PEAR::isError($download)) {
					array_push($download_list,$value['name']);
				} else {
					echo $download->getMessage();
				
				}
			}
		}

		echo "以下のファイルをダウンロードしました。<br />";
		foreach ($download_list as $value) {
			echo $value."<br />";
		}		
	}
} 

$ftp->disconnect();
?>