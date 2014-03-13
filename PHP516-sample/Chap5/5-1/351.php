<?php
	
	//元の画像1
	$source_img1 = imageCreateFromJpeg('350_1.jpg');

	//元の画像2
	$source_img2 = imageCreateFromPng('350_2.png');

	//元の画像2のサイズを取得
	$img_info = getimagesize($source_img2);
	
	//元の画像2の白色部分を透過色に設定する
	$white = ImageColorClosest ($source_img2, 255, 255, 255); 
    ImageColorTransparent($source_img2,$white);
	
	//画像を合成する
	imageCopyMerge($source_img1, $source_img2, 100, 130, 0, 0, $img_info[0],$img_info[1],100);


	
	//挿入する文字列
	$text1 = "ツワモノたちの夢の跡";
	$text2 = "The Gladiators";
	
	//フォントファイルの設定
	$font = "/usr/share/fonts/japanese/TrueType/sazanami-gothic.ttf";

	//文字の色を設定	
	$text_color1 = imagecolorallocate($source_img1, 255, 0, 0);
	$text_color2 = imagecolorallocate($source_img1, 0, 0, 255);

	//文字を画像に埋め込む
	imageTtfText($source_img1, 14, 0, 10, 15,$text_color1,$font,$text1);
	imageTtfText($source_img1, 12, 20, 170, 220,$text_color2,$font,$text2);
	
	//Mimeヘッダーの出力
	header("Content-Type: image/png");
		
	//メモリ上の画像データを出力
	Imagepng($source_img1);
	
	//メモリを解放
	imagedestroy($source_img1);
	imagedestroy($source_img2);

?>
