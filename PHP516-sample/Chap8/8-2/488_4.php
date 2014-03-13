<?php
//Smarty outputfilter 外部参照CSSをインラインCSSにする
function smarty_outputfilter_extcss($buff, &$smarty) {

	//ドコモのみ処理をする
	if (preg_match("/^DoCoMo/i",$_SERVER['HTTP_USER_AGENT'])) {

		require_once 'HTML/CSS.php';
		
		//<link>タグよりCSSファイルを取得
		preg_match('/<link rel="stylesheet" type="text\/css" href="(.*)" \/>/',$buff,$match);
		$css_file = $match[1];

		if (file_exists($css_file)) {		
			$css = new HTML_CSS();
			$result = $css->parseFile($css_file);
		
			$aryCss =  $css->toArray();
		
			foreach ($aryCss as $key => $value) {
		
				$style = $css->toInline($key);
		
				//要素+クラス指定
				if (preg_match('/([a-z0-9]+)\.(.+)/',$key,$class)) {
					$pattern = "/<{$class[1]} class=\"{$class[2]}\">/";
					$replacement = "<{$class[1]} style=\"{$style}\">";
				//クラス指定
				} elseif (preg_match('/\.(.+)/',$key,$class)) {
					$pattern = "/class=\"{$class[1]}\">/";
					$replacement = "style=\"{$style}\">";
				//要素のみ
				} else {
					$pattern = "/\<{$key}\>/";
					$replacement = "<{$key} style=\"{$style}\">";
				}
		
		
				$buff = preg_replace($pattern,$replacement,$buff);
			}

			//CSS外部参照のタグを消去
			$buff = preg_replace('{<link rel="stylesheet" type="text/css" href=".*" />\r?\n?}','',$buff);
		}
	}
		
	return $buff;
}
?>
