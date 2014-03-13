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
    //ログインユーザのプロフィールを取得する。
    //結果は配列で返る
    $response = $facebook->api('/me');
    //結果を表示する
  }catch(FacebookApiException $e){
    echo "エラーのため取得できません";
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
print_r($response);
?>
<br/><br/>
●内容表示:<br/>
<?php
echo "{$response['name']}</br>";
echo "{$response['first_name']}</br>";
echo "{$response['last_name']}</br>";
echo "{$response['link']}</br>";
echo "{$response['bio']}</br>";
?>
</body>
</html>
