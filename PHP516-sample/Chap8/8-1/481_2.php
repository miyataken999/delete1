<?php
	//Smarty outputfilter 文字コード変換プラグイン
	function smarty_outputfilter_convert_encode($buff, &$smarty) {
		//SB以外はSJIS-winへ変換。SBはUTF-8のまま出力（何もしない）
		if (career_type() <> 3 ) {
			$buff = mb_convert_encoding($buff,'SJIS-win','UTF-8');
			
			//DOCTYPEのcharsetをShift_JISに書き換える
			$buff = preg_replace('/UTF-8/', 'Shift_JIS', $buff);
			
		}
		return trim($buff);
	}
?>