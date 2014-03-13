<?php
//検索キーワードを設定
$keywd = "ラーメン";
$keywdenc = urlencode($keywd);
//検索する緯度経度、半径をカンマ区切りで設定。田町駅を中心に10Km
$geo="35.642475420821235,139.7509642816719,10km";

//検索APIの詳細はここを参照
//http://dev.twitter.com/doc/get/search
$url = "http://search.twitter.com/search.json?lang=ja&q=".$keywdenc;
$url .= "&geocode=".$geo;
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
キーワード：<?php echo $keywd ?><br/><br/>
検索結果：<br/><br/>
●json表示:<br/>
<?php
print_r($json);
?>
<br/><br/>
●一覧表示:<br/>
<?php
foreach($json->results as $one){
  echo "{$one->from_user}</br>";
  echo "{$one->text}</br></br>";
}
?>
</body>
</html>
