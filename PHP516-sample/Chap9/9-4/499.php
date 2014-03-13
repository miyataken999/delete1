<?php
//ユーザー名を設定
$user = "mogiken";

//タイムラインAPIの詳細はここを参照
//http://dev.twitter.com/doc/get/statuses/user_timeline
$url = "http://twitter.com/statuses/user_timeline.json?id=".$user;
//APIを実行
$body = file_get_contents($url);
//jsonに変換する
$json = json_decode($body);

//検索結果を表示する
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
ユーザー：<?php echo $user ?><br/><br/>
結果：<br/><br/>
●json表示:<br/>
<?php
print_r($json);
?>
<br/><br/>
●一覧表示:<br/>
<?php
foreach($json as $one){
  echo "{$one->text}</br></br>";
}
?>
</body>
</html>
