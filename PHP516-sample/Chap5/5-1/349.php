<?php
	
	//新規画像をメモリ上に作成
	$output_img = imagecreatetruecolor(800,600);

	//色をRGBで指定する
	$black = imagecolorallocate($output_img,0,0,0);
	$yellow = imagecolorallocate($output_img,255,255,0);

	//輪郭
	imagefilledellipse($output_img,400,300,400,400,$yellow);
	
	//目
	imagefilledellipse($output_img,325,250,100,125,$black);
	imagefilledellipse($output_img,475,250,100,125,$black);
	
	//口
	imagearc($output_img,400,375,200,150,25,155,$black);
	
	//Mimeヘッダーの出力
	header("Content-Type: image/jpeg");
		
	//メモリ上の画像データを出力
	imagejpeg($output_img);
	
	//メモリを解放
	imagedestroy($output_img);
?>
