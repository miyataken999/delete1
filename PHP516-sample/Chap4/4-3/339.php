<?php
require_once 'Mail.php';
require_once 'Mail/mime.php';

//日本語環境の設定
mb_language("japanese");
mb_internal_encoding("UTF-8");

//SMTPサーバ接続情報
$options = array(
	'host'	=>	'xxx.xxx.xxx.xxx',	//SMTPサーバアドレス
	'port'	=>	587,				//SMTPサーバポート（25又は587)
	'auth'	=> 	TRUE,				//SMTP認証が必要な場合
	'username'	=>	'xxx@xxx.xxx',	//SMTP認証ユーザ名
	'password'	=>	'xxxx',			//SMTP認証パスワード
);

//添付ファイルの指定
$attachment_file = './attach.jpg';

//PEAR Mailオブジェクト
$mail = Mail::factory('smtp',$options);

//メール送信先アドレス
$recipients = "xxxxx@xxxxx.xxxxxx,yyyyy@yyyyy.yyyy";

//メールサブジェクト
$subject = mb_convert_encoding('添付メール送信',"JIS","UTF-8");

//From
$fromAdr = "zzzz@zzzz.zzzzz";
$fromSender = mb_convert_encoding("PHPテストメール送信者","JIS","UTF-8");

//メールヘッダー
$headers = array(
	'To'	=>	'xxxxx@xxxxx.xxxxxx,yyyyy@yyyyy.yyyy',
	'From'	=>	mb_encode_mimeheader($fromSender)." <".$fromAdr.">",
	'Subject'	=>	mb_encode_mimeheader($subject),
	'Content-Type'	=> 'text/plain; charset="ISO-2022-JP"',
	'Content-Transfer-Encoding' => '7bit',
);

//メール本文
$body = mb_convert_encoding("添付メールを送ります。","JIS","UTF-8");

//添付メール処理
$mime = new Mail_mime("\n");
$mime->setTxtBody($body);
$mime->addAttachment($attachment_file,"image/jpeg");
$body_encode = array(
	"head_charset" => "ISO-2022-JP",
	"text_charset" => "ISO-2022-JP",
);
$body = $mime->get($body_encode);
$header = $mime->headers($headers);


//メール送信
$mail->send($recipients,$header,$body);
?>