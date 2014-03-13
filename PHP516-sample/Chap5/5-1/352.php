<?php
	
	//ベース画像
	$base_img = imageCreateTrueColor(320, 100);	//デフォルトでは背景色が黒になります
	
	//挿入する文字列
	$text = "http://www.shuwasystem.co.jp/";
	
	//フォントファイルの設定
	$font = "/usr/share/fonts/japanese/TrueType/sazanami-gothic.ttf";

	//文字の色を設定	
	$red = imageColorAllocate($base_img, 255, 0, 0);

	//文字を画像に埋め込む
	imageTtfText($base_img, 12, 0, 30, 60,$red,$font,$text);

	//透過色の設定	
	$black = ImageColorClosest ($base_img, 0, 0, 0); 
	ImageColorTransparent($base_img,$black);
	
	//Mimeヘッダーの出力
	header("Content-Type: image/gif");
		
	//メモリ上の画像データを出力
	Imagegif($base_img);
	
	//メモリを解放
	imagedestroy($base_img);
?>
