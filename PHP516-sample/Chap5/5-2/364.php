<?php
	//Imagickオブジェクト
	$image = new Imagick();

	//新しい画像を生成
	$image->newImage(320,120,'white');

	//枠線をつける
	$image->borderImage('black',2,2);

	//ImagaickDrawオブジェクト
	$red = new imagickDraw();		//赤
	$red->setFillColor('red');		//塗りつぶし色
	$red->setStrokeColor('red');	//枠線色
	$red->circle(55,60,85,90);		//円を描画

	$yellow = new imagickDraw();
	$yellow->setFillColor('yellow');	//塗りつぶし色
	$yellow->setStrokeColor('yellow');	//枠線色
	$yellow->circle(160,60,190,90);		//円を描画

	$blue = new imagickDraw();	
	$blue->setFillColor('blue');		//塗りつぶし色
	$blue->setStrokeColor('blue');		//枠線色
	$blue->circle(265,60,295,90);		//円を描画

	//ImagickオブジェクトにDrawオブジェクトを描画
	$image->drawImage($red);
	$image->drawImage($yellow);
	$image->drawImage($blue);

	//画像形式を指定
	$image->setImageFormat('gif');
			
	//Mimeヘッダー
	header('Content-Type: image/gif');
	
	//出力
	echo $image;
	
	//メモリ解放
	$image->Destroy();
	$red->Destroy();
	$yellow->Destroy();
	$blue->Destroy();
?>