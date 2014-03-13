<?php
	//画像ファイルを指定
	$img_filename = "343.jpg";
	
	//画像の縦横サイズを取得する
	list($width,$height) = getimagesize($img_filename);
	
	//横160ピクセルのサムネイルを生成する
	$new_width = 160;
	
	//横の縮小比率を求め、サムネイル画像の縦サイズを設定する
	$new_height = round($new_width / $width,2) * $height;
	
	//元の画像を読むこむ
	$source_img = imagecreatefromjpeg($img_filename);
	
	//サムネイル画像を生成する
	$thumb_img = imagecreatetruecolor($new_width, $new_height);
	
	//リサイズを行う
	imagecopyresized($thumb_img, $source_img, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
	
	//サムネイル画像をファイルに出力する
	imagejpeg($thumb_img,"thumb.jpg");
	
	//サムネイル画像のメモリを解放する
	imagedestroy($thumb_img);	
?>

<HTML>
<BODY>
<PRE>
元の画像：<BR />
<IMG SRC="<?php echo $img_filename; ?>">
<HR>
サムネイル画像：<BR />
<IMG SRC="thumb.jpg">

</PRE>
</BODY>
</HTML>