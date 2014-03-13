<?php
	//ffmpegのパスを設定
	$ffmpeg = "/usr/bin/ffmpeg ";
	
	//元の動画ファイル
	$src_movie = "-i 370.m4v ";
	
	//変換後の動画ファイル
	$dest_movie = "-y 370.mpeg ";
	
	//変換後のビデオコーデック
	$videoCodec = "-vcodec mpeg2video ";
	
	//変換後のオーディオコーデック
	$audioCodec = "-acodec ac3 ";
	
	//コマンドを組み立て
	$command = $ffmpeg.$src_movie.$videoCodec.$audioCodec.$dest_movie;
	
	//コマンド実行
	system($command);
	
	echo $command." 実行";
?>
