<?php
//https://github.com/facebook/php-sdkからPHP SDKをダウンロードして設置する。ファイルはfacebook.php、fb_ca_chain_bundle.crt。
//SDKを読み込む
require_once 'facebook.php';
//認証キーを設定してFacebookモジュールを生成
//SDKの詳細はここhttps://github.com/facebook/php-sdk/
//APIの仕様はGraphAPIのページを参考に。http://developers.facebook.com/docs/reference/api/
$facebook = new Facebook(array(
  'appId' => '',//アプリID
  'secret' => '',//アプリの秘訣
  'cookie' => true,
));
//アプリの許可状態チェックする
$session = $facebook->getSession();
//未許可のとき
if(!$session){
  //アプリの認証URLを取得する
  $url = $facebook->getLoginUrl(array(
    'canvas' => 1,
    'fbconnect' => 0,
    'req_perms' => 'status_update, publish_stream',
  ));
  // アプリの認証ページへ遷移する
  echo "<script type='text/javascript'>top.location.href = '$url';</script>"; 
}else{
//登録済みの時
  try {
    //投稿する
    //APIの詳細はhttp://developers.facebook.com/docs/reference/rest/stream.publish/
    $facebook->api(array(
      'method' => 'stream.publish',
      'message' => 'PHPからのFacebookへの投稿テストです',
    ));
    $message = "投稿しました";
  }catch(FacebookApiException $e){
    $message = "エラーのため取得できません";
  }
}
//結果を表示する
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
結果：<br/><br/>
●表示:<br/>
<?php
echo $message;
?>
</body>
</html>
