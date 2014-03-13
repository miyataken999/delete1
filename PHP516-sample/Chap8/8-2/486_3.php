<?php
	require_once( 'Smarty.class.php' );
	$smarty = new Smarty;
	$smarty->template_dir = '/path/to/file';	//テンプレートファイルへのパス	
	$smarty->compile_dir = '/path/to/file';		//テンプレートファイルへのパス	
	$smarty->plugins_dir[] ='/path/to/file';	//テンプレートファイルへのパス	
	
	//Smarty フィルター設定
	$smarty->autoload_filters = array('output' => array('emoji','convert_encode'));

	//HTTP変数の取得
	$input_data = $_POST['input_fieled'];
	$convert_data = "";

	//キャリア毎に絵文字の正規表現を設定
	switch (career_type()) {
		//ドコモ
		case 1:
			$encode_type = "SJIS-win";
			$pattern = "/([\xF3\xF4\xF6\xF7][\x40-\xFC])/i";
			break;
		//au
		case 2:
			$encode_type = "SJIS-win";
			$pattern = "/(\xf8[\x9f-\xfc])|(\xf9[\x40-\xfc])/i";
			break;	
		//SB
		case 3:
			$encode_type = "UTF-8";
			$pattern = "/\xEE([\x80\x81\x84\x85\x88\x89\x8C\x8D\x90\x91\x94][\x80-\xBF])/i";
			break;	
		default:
			$input_data = "";
			break;
	}
	
	//入力データに絵文字が入っているかをチェックし、入っていればドコモUnicodeに変換を行う
	while ($input_data) {
		//入力データから1文字づつ処理を行う
		$data = mb_substr($input_data,0,1,$encode_type);
		$rtn = preg_replace_callback($pattern,"inputEmoji_convert",$data);

		//変換後の文字列
		$convert_data .= $rtn;

		//入力文字列の先頭を削除
		$input_data = preg_replace("/^{$data}/","",$input_data);
	}
		
	//入力文字コード変換（ドコモ及びauのみ）
	if (career_type() <> 3) {
		$convert_data = mb_convert_encoding($convert_data,'UTF-8','SJIS-win');
	}

	//ヘッダー出力
	header("Content-Type: application/xhtml+xml");

	//Smartyテンプレート表示
	$smarty->assign('input_emoji',$convert_data);
	$smarty->display('486_4.tpl');	

	//キャリア判別
	function career_type() {
		$ua = $_SERVER['HTTP_USER_AGENT'];
		if (preg_match("/^DoCoMo/i",$ua)) {
			$career = 1;
		} elseif (preg_match("/^KDDI-|^UP\.Browser/i", $ua)) {
			$career = 2;
		} elseif (preg_match("/^J-PHONE|^Vodafone|^softbank|^MOT-|Netfront/i", $ua)) {
			$career = 3;
		} elseif (preg_match("/emobile/i", $ua)) {
			$career = 4;
		} else {
			$career = 5;
		}
		return $career;
	}
	
	//絵文字を共通コード（ドコモUnicode）に変換する
	function inputEmoji_convert($param) {
		//絵文字のバイナリコードを16進に変換
		$emojiHex = bin2hex($param[0]);

		//絵文字変換表読込
		$fp = fopen('485_1.txt',"r");
		$emoji_arr = array();
		
		//絵文字照合
		$emoji = "";
		switch (career_type()) {
			case 1:	//ドコモ
				while (($data = fgetcsv($fp, 1000, ",")) !== FALSE) {
					if ($data[5] == strtoupper($emojiHex)) {
						$emoji = $data[2];
						break;
					}
				}
				break;

			case 2:
				while (($data = fgetcsv($fp, 1000, ",")) !== FALSE) {
					if ($data[6] == strtoupper($emojiHex)) {
						$emoji = $data[2];
						break;
					}
				}
				break;

			case 3:
					while (($data = fgetcsv($fp, 1000, ",")) !== FALSE) {
					if ($data[7] == strtoupper($emojiHex)) {
						$emoji = $data[2];
						break;
					}
				}
				break;			
		}
		
		if (!empty($emoji)) {
			$emoji = "&#x".$emoji.";";
		}
	
		return $emoji;
	}
	
?>