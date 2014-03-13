<HTML>
<BODY>

<?php
	//EXIF情報取得
	$exif = exif_read_data('343.jpg',0,true);
	
	foreach ($exif as $key => $value) {
		foreach ($value as $key2 => $value2) {
			echo $key.":".$key2."=>".$value2."<br />";
		}
	}
?>

</BODY>
</HTML>