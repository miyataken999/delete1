<?php
	//格納する画像
	$image_file = '343.jpg';
	$image_fullpath = '/path/to/image/file/';	//パスを変更すること
	
	//DB接続
	$db = pg_connect("host=localhost port=5432 dbname=php500 user=postgres password=postgres");	//DB接続情報を変更すること
	
	//ラージオブジェクのインポート
	pg_query($db, "begin");
	$oid = pg_lo_import($db,$image_fullpath.$image_file);
		
	//SQL
	$sql = "INSERT INTO image VALUES('".$image_file."',".$oid.")";
	
	//SQL実行
	pg_query($db,$sql);
	pg_query($db,"commit");

	//DBクローズ
	pg_close($db);
	
	echo "Finished.";
?>
