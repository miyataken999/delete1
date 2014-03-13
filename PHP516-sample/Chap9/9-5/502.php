<?php
//検索キーワードを設定します
$keywd = "すげー";
$keywdenc = urlencode($keywd);
//Graph APIのURLです。詳細はhttp://developers.facebook.com/docs/reference/api/
$url = "https://graph.facebook.com/search?type=post&q=".$keywdenc;
//APIを実行
$body = file_get_contents($url);
//Jsonに変換する
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
foreach($json->data as $one){
  echo "{$one->from->name}</br>";
  echo "{$one->message}</br>";
  echo "<a href='{$one->link}' />{$one->link}</a></br></br>";
}
?>
</body>
</html>
