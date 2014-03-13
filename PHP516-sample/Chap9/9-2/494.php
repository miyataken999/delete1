<?php
//検索キーワードを設定します
$keywd = "日本人";
$keywdenc = urlencode($keywd);
//Googleの検索APIのURLです。詳細はhttp://code.google.com/intl/ja/apis/websearch/docs/reference.html#_intro_fonje
$url = "http://ajax.googleapis.com/ajax/services/search/web?v=1.0&hl=ja&q=".$keywdenc;
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
foreach($json->responseData->results as $one){
  echo "{$one->title}</br>";
  echo "<a href='{$one->unescapedUrl}'>{$one->url}</a></br></br>";
}
?>
</body>
</html>
