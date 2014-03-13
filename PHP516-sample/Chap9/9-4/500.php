<?php
//pearライブラリServices_Twitterを使います。「 pear install Services_Twitter」などでインストールしてください。このサービスから使用しているライブラリ「HTTP_Request2,Net_URL2,HTTP_OAuth」もpearなどでインストールしてください。
//ライブラリを取り込む
require_once 'Services/Twitter.php';
require_once 'HTTP/OAuth/Consumer.php';
//APIの詳細はここです。http://apiwiki.twitter.com/w/page/22554679/Twitter-API-Documentation
try {
	//サービスを作る
	//Services_Twitterの詳細はここです。http://pear.php.net/package/Services_Twitter/redirected
    $stwitter = new Services_Twitter();
	//キーを設定する。
	//https://dev.twitter.com/appsでアプリを登録し、登録したアプリのキーを調べる。Access Tokenは右側メニューの[My Access Token]で調べる
    $oauth   = new HTTP_OAuth_Consumer(
       '', //Consumer key
       '',//Consumer secret
       '',//Access Token
       ''//Access Token Secret
    );
	//キーをセットする
    $stwitter->setOAuth($oauth);
	//メッセージを投稿する
    $stwitter->statuses->update("PHPからTwitterへの投稿テストです");
    $message = "投稿しました";
} catch (Services_Twitter_Exception $e) {
    $message = $e->getMessage();
}
//結果を表示する
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
メッセージ：<?php echo $message ?>
</body>
</html>
