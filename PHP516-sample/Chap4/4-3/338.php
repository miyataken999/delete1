<?php
require_once 'Mail.php';

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

//PEAR Mailオブジェクト
$mail = Mail::factory('smtp',$options);

//メール送信先アドレス
$recipients = "xxxxx@xxxxx.xxxxxx,yyyyy@yyyyy.yyyy";

//メールサブジェクト
$subject = mb_convert_encoding('テストメール',"JIS","UTF-8");

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
$body = mb_convert_encoding("これはテストメールです。","JIS","UTF-8");

//メール送信
$mail->send($recipients,$headers,$body);
?>