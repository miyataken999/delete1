<?php
	//動作モード
	$mode = $_GET['mode'];
	
	//画像ファイルを指定
	$img_filename = "343.jpg";

	//画像情報を取得する
	$img_info = getimagesize($img_filename);
	
	//指定された動作モードにより処理を帰る
	if ($mode == 'original') {			//元画像をそのまま出力
		$output_img = imagecreatefromjpeg($img_filename);
	} elseif ($mode == 'thumbnail') {	//サムネイル画像を出力
		//横160ピクセルのサムネイルを生成する
		$new_width = 160;
		
		//横の縮小比率を求め、サムネイル画像の縦サイズを設定する
		$new_height = round($new_width / $img_info[0],2) * $img_info[1];
		
		//元の画像を読むこむ
		$source_img = imagecreatefromjpeg($img_filename);
		
		//サムネイル画像を生成する
		$output_img = imagecreatetruecolor($new_width, $new_height);
		
		//リサイズを行う
		imagecopyresized($output_img, $source_img, 0, 0, 0, 0, $new_width, $new_height, $img_info[0], $img_info[1]);		
	
	//動作モードが指定外の場合
	} else {
		$output_img = NULL;
	}
	
	//Mimeヘッダー出力
	header('Content-Type: '.$img_info['mime']);
		
	//メモリ上の画像データを出力
	imagejpeg($output_img);
	
	//メモリを解放
	imagedestroy($output_img);

?>
