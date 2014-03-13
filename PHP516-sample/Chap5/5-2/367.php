<?php
	//各信号の点灯中色オブジェクト
	$red = signal_color(265,'#ff0000');
	$yellow = signal_color(160,'#ffff00');
	$blue = signal_color(55,'#0000ff');

	//各信号の消灯中色オブジェクト
	$red_off = signal_color(265,'#ffc0cb');
	$yellow_off = signal_color(160,'#f0e68c');
	$blue_off = signal_color(55,'#b0c4de');

	//青信号点灯オブジェクト
	$anime = signal();
	$anime->drawImage($red_off);
	$anime->drawImage($yellow_off);
	$anime->drawImage($blue);	
	
	//黄色信号点灯オブジェクト
	$im_yellow = signal();
	$im_yellow->drawImage($red_off);
	$im_yellow->drawImage($yellow);
	$im_yellow->drawImage($blue_off);		

	//赤信号点灯オブジェクト
	$im_red = signal();
	$im_red->drawImage($red);
	$im_red->drawImage($yellow_off);
	$im_red->drawImage($blue_off);		

	//GIFアニメ生成
	$anime->setImageDelay(300);
	$anime->setImageIterations(0);

	$anime->addImage($im_yellow);
	$anime->setImageDelay(100);

	$anime->addImage($im_red);
	$anime->setImageDelay(200);
	
	//GIFアニメファイル書き込み	
	$anime->writeImages('signal.gif',true);
	
	//メモリ解放
	$anime->Destroy();
	$im_yellow->Destroy();
	$im_red->Destroy();
	$red->Destroy();
	$yellow->Destroy();
	$blue->Destroy();
	$red_off->Destroy();
	$yellow_off->Destroy();
	$blue_off->Destroy();

	//各信号描画関数
	function signal_color($pos_x,$color) {
		$obj = new imagickDraw();
		$obj->setFillColor(new ImagickPixel($color));
		$obj->setStrokeColor(new ImagickPixel($color));
		$obj->circle($pos_x, 60, $pos_x+30, 90);
		
		return $obj;
	}
	
	//信号生成関数
	function signal() {
		$obj = new Imagick();
		$obj->setFormat('gif');
		$obj->newImage(320,120,'white');
		$obj->borderImage('black',2,2);	
	
		return $obj;
	}
?>

<HTML>
<BODY>
<IMG SRC="signal.gif">
</BODY>
</HTML>