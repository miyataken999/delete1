<?php
	//元画像
	$original_img = '358.jpg';

	//Imagickオブジェクト
	$im = new Imagick($original_img);

	//コントラストを強調する	
	$im->levelImage(100,3,65535);
	
	//Mimeヘッダー
	header('Content-Type: image/jpeg');
	
	//出力
	echo $im;
	
	//メモリ解放
	$im->Destroy();
?>