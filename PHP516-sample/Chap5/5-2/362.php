<?php
	//元画像1
	$original_img = '358.jpg';

	//Imagickオブジェクト
	$im = new Imagick($original_img);

	//コントラストを強調する	
	$im->contrastImage(1);
	$im->contrastImage(1);
	$im->contrastImage(1);
	$im->contrastImage(1);
	
	//Mimeヘッダー
	header('Content-Type: image/jpeg');
	
	//出力
	echo $im;
	
	//メモリ解放
	$im->Destroy();
?>