#!/usr/local/bin/php
<?php
//PEAR mail_mimeDecodeをインクルード
require_once 'Mail/mimeDecode.php';

//標準入力からのメールを読み込む
$decoder = new Mail_mimeDecode(file_get_contents("php://stdin"));
$params['include_bodies'] = false;
$params['decode_bodies']  = false;
$params['decode_headers'] = true;
$structure = $decoder->decode($params);

preg_match("/<([^>]+)>$/", $structure->headers['from'], $matches);
$fromAdr = $matches[1];

//返信
mb_send_mail($fromAdr, "受け付けました。", "空メール登録を受け付けました", "From: webmaster@php500.jp");
?>