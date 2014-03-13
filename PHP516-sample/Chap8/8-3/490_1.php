<?php
//Smarty outputfilter 絵文字変換プラグイン
function smarty_outputfilter_emoji($buff, &$smarty) {
	/* 絵文字設定ファイル読込 */
	$fp = fopen('490_4.txt',"r");
	$emoji_arr = array();
	$i=0;
	while (($data = fgetcsv($fp, 1000, ",")) !== FALSE) {
		$emoji_arr[$i] = array($data[2],$data[3],$data[4],$data[5]);
		$i++;		
	}

	$aryCareer = career_type();

	preg_match_all('/&#x([0-9A-Za-z]{4});/',$buff,$regex);
	foreach($regex[1] as $key => $value) {
		for ($i=0; !empty($emoji_arr[$i]); $i++) {
			if ($emoji_arr[$i][0] == $value) {
				switch($aryCareer[0]) {
					case 'docomo':
						$emoji = "&#x".$emoji_arr[$i][0].";";
						break;
					case 'au':
						$emoji = "<IMG LOCALSRC=\"".$emoji_arr[$i][1]."\" />";
						break;
					case 'sb':
						$emoji = "&#x".$emoji_arr[$i][2].";";
						break;
					case 'Android':
						if ($aryCareer[1] <> 'Android1.6') {
							$emoji = "&#x".$emoji_arr[$i][3].";";
						}
						break;
					default;
						$emoji = "*";
						break;
				}
				$buff = preg_replace('/&#x'.$value.';/',$emoji,$buff);
			}
		}
	}
	return $buff;
}
?>