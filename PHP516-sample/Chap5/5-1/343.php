<?php
	//画像ファイルを指定
	$img_filename = "343.jpg";
	
	//画像情報を取得する
	$img_info = getimagesize($img_filename);
	$format = image_type_to_extension($img_info[2]);
	var_dump($img_info);
?>

<HTML>
<BODY>
<PRE>
<IMG SRC="<?php echo $img_filename; ?>">
<BR />
横のサイズは<?php echo $img_info[0]; ?>ピクセルです。<BR />
縦のサイズは<?php echo $img_info[1]; ?>ピクセルです。<BR />
画像フォーマットは<?php echo $format ?>です。<BR />
画像のIMG属性タグは<?php echo $img_info[3]; ?>です。<BR />
画像のMIMEタイプは<?php echo $img_info['mime']; ?>です。<BR />
</PRE>
</BODY>
</HTML>