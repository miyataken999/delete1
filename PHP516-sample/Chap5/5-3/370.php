<?php
	$movie = new ffmpeg_movie('370.m4v');
	
	//ファイル名
	$filename = $movie->getFileName();
	
	//フレームレート
	$flame_rate = $movie->getFrameRate();
	
	//フレーム数
	$flame_count = $movie->getFrameCount();
	
	//縦幅
	$height = $movie->getFrameHeight();
	
	//横幅
	$width = $movie->getFrameWidth();
	
	//音声ビットレート
	$bit_rate = $movie->getAudioBitRate();
	
	//ビデオコーデック
	$codec = $movie->getVideoCodec();
	
	//オーディオコーデック
	$audio_codec = $movie->getAudioCodec();
?>

<HTML>
<BODY>
ファイル名：<?php echo $filename; ?><br />
フレームレート：<?php echo $flame_rate; ?><br />
フレーム数：<?php echo $flame_count; ?><br />
縦幅：<?php echo $height; ?><br />
横幅：<?php echo $width; ?><br />
音声ビットレート：<?php echo $bit_rate; ?><br />
ビデオコーデック：<?php echo $codec; ?><br />
オーディオコーデック：<?php echo $audio_codec; ?><br />
</BODY>
</HTML>