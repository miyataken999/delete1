<?php
//Flickerでユーザ登録をし、ここでAPI Keyを発行する
//http://www.flickr.com/services/apps/create/apply
$apiKey= '';
//検索キーワードを設定
$keywd = "猫";
$keywdenc = urlencode($keywd);

//検索APIの詳細はここを参照
//http://www.flickr.com/services/api/flickr.photos.search.html
$url = "http://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=".$apiKey;
$url .= "&text=".$keywdenc;
//フォーマットはjsonで返す。json,xmlも可能。
$url .= "&format=json";
//jsonのコールバック関数は使用しない。
$url .= "&nojsoncallback=1";
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
foreach($json->photos->photo as $one){
  echo "{$one->title}</br>";
  echo "<img src='http://farm{$one->farm}.static.flickr.com/{$one->server}/{$one->id}_{$one->secret}.jpg' /></br></br>";
}
?>
</body>
</html>
