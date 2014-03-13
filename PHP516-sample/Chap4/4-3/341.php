#!/usr/local/bin/php
<?php
require_once 'Mail/mimeDecode.php';

//パース設定
$params['include_bodies'] = true; 
$params['decode_bodies']  = true; 
$params['decode_headers'] = true; 
$params['input'] = file_get_contents("php://stdin"); 

//標準入力からメールを読み込む
$decoder = Mail_mimeDecode::decode($params);

mb_internal_encoding("JIS");

$from = $decoder->headers['from'];
$result .= "From => ".mb_convert_encoding($from, 'UTF-8','JIS')."\n";
$subject = $decoder->headers['subject'];
$result .= "Subject => ".mb_convert_encoding($subject, 'UTF-8','JIS')."\n";
$result .= "Mailer => ".$decoder->headers['x-mailer']."\n";
$result .= "Date => ".$decoder->headers['date']."\n";

//ボディ部分の処理
if ($decoder->ctype_primary == "text") {		//メールヘッダーContent-type = text/plain	
	$textBody = $decoder->body;
} elseif ($decoder->ctype_primary == "multipart") {	//メールヘッダーContent-type = multipart
	//Multipartの場合、各ブロック毎に処理を行う
	foreach ($decoder->parts as $key => $multipart) {
		if ($multipart->ctype_primary == "text") {			//Multipart部分がtext
			$textBody = $multipart->body;
		} else {											//text以外であれば/tmpにファイルとして保存
			$imageBody = $multipart->body;
			$filename = "/tmp/".$multipart->d_parameters['filename'];
			
			//ファイルに保存
			$fp = fopen($filename,"w");
			fputs($fp,$imageBody);
			fclose($fp);

			$flelists .= $filename."\n";
		}	
	}
}

$result .= "Body => ".mb_convert_encoding($textBody, 'UTF-8','JIS')."\n";
$result .= "File => ".$flelists."\n";

//パース結果をファイルに出力
$fp = fopen("/tmp/mailParse.txt","w");
fputs($fp,$result);
fclose($fp);

?>