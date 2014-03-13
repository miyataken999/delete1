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

//HTML画像ファイルの指定
$attachment_file1 = './attach1.jpg';
$attachment_file2 = './attach2.jpg';
$attachment_file3 = './attach3.jpg';

//PEAR Mailオブジェクト
$mail = Mail::factory('smtp',$options);

//メール送信先アドレス
$recipients = "xxxxx@xxxxx.xxxxxx,yyyyy@yyyyy.yyyy";

//メールサブジェクト
$subject = mb_convert_encoding('HTMLメール送信',"JIS","UTF-8");

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

//テキストメール部分
$body = mb_convert_encoding("このメールはHTMLメールで送信しています。HTMLメール対応メーラーでご覧ください。","JIS","UTF-8");

//HTMLメール部分
$htmlBody = <<<EOD
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=shift_jis">
<title>HTMLメールの送信</title>
</head>
<body>
<h1>HTMLメールの送信テスト</h1>
<table border=0>
<tr><td><img src="./attach1.jpg"><br />
イタリア・ヴェネチアその１</td>
<td><img src="./attach2.jpg"><br />
イタリア・ヴェネチアその2</td>
<td><img src="./attach3.jpg"><br />
イタリア・ヴェネチアその3</td></tr>
</table><br />
ヴェネチアは<a href="http://maps.google.co.jp/maps?q=%E3%83%99%E3%83%8D%E3%83%81%E3%82%A2&hl=ja&ie=UTF8&ll=45.440742,12.351723&spn=0.079374,0.140247&sll=36.5626,136.362305&sspn=45.904004,71.806641&brcurrent=3,0x0:0x0,0&z=13">こちら</a>
</body>
</html>
EOD;
$htmlBody = mb_convert_encoding($htmlBody,"SJIS","UTF-8");

//HTMLメール処理
$mime = new Mail_mime("\n");
$mime->setTxtBody($body);
$mime->setHTMLBody($htmlBody);
$mime->addHTMLImage($attachment_file1,"image/jpeg");
$mime->addHTMLImage($attachment_file2,"image/jpeg");
$mime->addHTMLImage($attachment_file3,"image/jpeg");
$body_encode = array(
	"head_charset" => "ISO-2022-JP",
	"text_charset" => "ISO-2022-JP",
	"html_encoding" => "ISO-2022-JP",
	"html_charset" => "SJIS",
);
$body = $mime->get($body_encode);
$header = $mime->headers($headers);

//メール送信
$mail->send($recipients,$header,$body);
?>