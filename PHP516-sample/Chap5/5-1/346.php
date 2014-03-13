<?php
	
	//新規画像をメモリ上に作成
	$output_img = imagecreatetruecolor(800,600);
	
	//直線の数を10本〜100本の間でランダムで決める
	$loop = mt_rand(10,100);
	
	for ($i=0; $i <= $loop; $i++) {
		//始点の決定
		$start_x = mt_rand(0,800);
		$start_y = mt_rand(0,600);
		
		//終点の決定
		$end_x = mt_rand(0,800);
		$end_y = mt_rand(0,600);
		
		//色をRGBで指定する
		$red = mt_rand(0,255);
		$green = mt_rand(0,255);
		$blue = mt_rand(0,255);
		$color = imagecolorallocate($output_img,$red,$green,$blue);
		
		//直線を引く
		imageline($output_img,$start_x,$start_y,$end_x,$end_y,$color);
	}
		
	//Mimeヘッダーの出力
	header("Content-Type: image/jpeg");
		
	//メモリ上の画像データを出力
	imagejpeg($output_img);
	
	//メモリを解放
	imagedestroy($output_img);

?>
