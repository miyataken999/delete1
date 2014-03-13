<?php
	//Imagickオブジェクト
	$image = new Imagick('366.gif');

	//Drawオブジェクト
	$red = new imagickDraw();
	$red->setFont('/usr/share/fonts/japanese/TrueType/sazanami-gothic.ttf');
	$red->setFontSize('20');
	$red->setFillColor('red');
	$red->setStrokeAntialias(true);
	$red->setTextAntialias(true);
	$red->annotation(270,120,'あか');
	
	$yellow = new imagickDraw();
	$yellow->setFont('/usr/share/fonts/japanese/TrueType/sazanami-gothic.ttf');
	$yellow->setFontSize('20');
	$yellow->setFillColor('yellow');
	$yellow->setStrokeAntialias(true);
	$yellow->setTextAntialias(true);
	$yellow->annotation(160,120,'きいろ');	

	$blue = new imagickDraw();
	$blue->setFont('/usr/share/fonts/japanese/TrueType/sazanami-gothic.ttf');
	$blue->setFontSize('20');
	$blue->setFillColor('blue');
	$blue->setStrokeAntialias(true);
	$blue->setTextAntialias(true);
	$blue->annotation(60,120,'あお');	

	//ImagickオブジェクトにDrawオブジェクトを描画	
	$image->drawImage($red);
	$image->drawImage($yellow);
	$image->drawImage($blue);

	//画像形式をGIFに設定	
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