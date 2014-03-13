<?php
	
	//新規画像をメモリ上に作成
	$output_img = imagecreatetruecolor(800,600);
	
	//各頂点が格納される配列
	$aryPoints = array();
	
	//頂点数
	$points = mt_rand(3,20);
	
	$i=0;
	while ($i < $points) {
	
		$x = mt_rand(0,800);
		$y = mt_rand(0,600);

		array_push($aryPoints,$x);
		array_push($aryPoints,$y);
		
		$i++;
	}	
	
	//色をRGBで指定する
	$red = mt_rand(0,255);
	$green = mt_rand(0,255);
	$blue = mt_rand(0,255);
	$color = imagecolorallocate($output_img,$red,$green,$blue);
	
	//多角形を描画する
	imagepolygon($output_img,$aryPoints,$points,$color);
		
	//Mimeヘッダーの出力
	header("Content-Type: image/jpeg");
		
	//メモリ上の画像データを出力
	imagejpeg($output_img);
	
	//メモリを解放
	imagedestroy($output_img);

?>
