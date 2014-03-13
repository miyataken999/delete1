<?php
	//オブジェクト生成
	$movie = new ffmpeg_movie('370.m4v');

	//70フレーム目のffmpeg_frameオブジェクトを返す
	$frame = $movie->getFrame(70);
	
	//画像をGDリソースとして返す
	$image = $frame->toGDImage();

	//Mimeタイプ
	header("Content-Type: image/jpeg");

	//GDリソースをJPEGとして出力
	imagejpeg($image);
?>
