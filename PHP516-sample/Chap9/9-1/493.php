<?php
//ユーザ名を指定。http://bit.ly/でユーザ登録する
$username = "";
//APIキーを設定。http://bit.ly/a/your_api_keyでキーを確認できる。
$apikey = "";

///////////短縮URLをもどす/////////////
//もどしたいURLを指定
$url="http://bit.ly/gQl92O";
//詳細なフォーマットはここhttp://code.google.com/p/bitly-api/wiki/ApiDocumentation#/v3/expand
$bitlyurl = "http://api.bit.ly/v3/expand?login=" .$username;
$bitlyurl .= "&apiKey=" .$apikey;
$bitlyurl .= "&shortUrl=" .$url;
//フォーマットはtxtで返す。jsonも可能。
$bitlyurl .= "&format=txt";
//APIを実行
$expandurl = file_get_contents($bitlyurl);

//もとのURLを表示する
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
短縮URL：<?php echo $url ?><br/>
元のURL：<?php echo $expandurl ?><br/>
</body>
</html>
