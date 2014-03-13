<?php
	//元画像1
	$original_img1 = '359_1.jpg';
	//元画像2
	$original_img2 = '359_2.jpg';
	
	//Imagickオブジェクト
	$im1 = new Imagick($original_img1);
	$im2 = new Imagick($original_img2);
	
	//リサイズ実行
	$im2->thumbnailImage(200,0);
	
	//回転
	$im2->rotateImage('none',20);
	
	//合成
	$im1->compositeImage($im2,imagick::COMPOSITE_DEFAULT,400,0);
	
	//Mimeヘッダー
	header('Content-Type: image/jpeg');
	
	//出力
	echo $im1;
	
	//メモリ解放
	$im1->Destroy();
	$im2->Destroy();
?>