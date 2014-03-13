<?php

	//元の画像1
	$source = imageCreateFromJpeg('343.jpg');

	//画像回転
	$rotate = imagerotate($source,45,0);
	
	//Mimeヘッダーの出力
	header("Content-Type: image/jpeg");
		
	//メモリ上の画像データを出力
	imagejpeg($rotate);
	
	//メモリを解放
	imagedestroy($source);
	imagedestroy($rotate);

?>
