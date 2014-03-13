<?php
	//DB接続
	$db = pg_connect("host=localhost port=5432 dbname=php500 user=postgres password=postgres");	//DB接続情報を変更すること
	
	//オブジェクトIDの取得
	//SQL
	$sql = "SELECT id from image where name='".$original_file."'";
	
	$result = pg_query($db,$sql);
	$oid = pg_fetch_result($result,0,'id');
	
	//ラージオブジェクトの読込
	pg_query($db, "begin");
	$lo = pg_lo_open($db, $oid, "r");

	//ブラウザにラージオブジェクトを送信
	$data = pg_lo_read($lo,2097152);	//2MB分のデータを読込	
	pg_query($db, "commit");
	
	//DBクローズ
	pg_close($db);
	
	//Mimeヘッダーの出力
	header("Content-Type: image/jpeg");

	//画像データをブラウザに送信
	echo $data;
?>
