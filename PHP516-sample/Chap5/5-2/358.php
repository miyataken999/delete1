<?php
	//元の画像
	$original_img = '358.jpg';
	
	//Imagickオブジェクト
	$im = new Imagick($original_img);
	
	//リサイズ実行
	$im->thumbnailImage(320,0);
	
	//Mimeヘッダー
	header('Content-Type: image/jpeg');
	
	//出力
	echo $im;
	
	//メモリ解放
	$im->Destroy();
?>