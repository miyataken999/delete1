<?php
	//Imagickオブジェクト
	$image = new Imagick('365.gif');

	//色を置換	
	$image->paintOpaqueImage('red','green', 0);	//赤を一旦緑に
	$image->paintOpaqueImage('blue','red', 0);	//青を赤に
	$image->paintOpaqueImage('green','blue', 0); //緑を青に
			
	//Mimeヘッダー
	header('Content-Type: image/gif');
	
	//出力
	echo $image;
	
	//メモリ解放
	$image->Destroy();
?>