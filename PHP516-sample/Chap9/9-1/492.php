<?php
//ユーザ名を指定。http://bit.ly/でユーザ登録する
$username = "";
//APIキーを設定。http://bit.ly/a/your_api_keyでキーを確認できる。
$apikey = "";

///////////URLを短縮する/////////////
//短縮したいURLを指定
$url="http://google.com/";
//詳細なフォーマットはここhttp://code.google.com/p/bitly-api/wiki/ApiDocumentation#/v3/shorten
$bitlyurl = "http://api.bit.ly/v3/shorten?login=" .$username;
$bitlyurl .= "&apiKey=" .$apikey;
$bitlyurl .= "&longUrl=" .$url;
//フォーマットはtxtで返す。json,xmlも可能。
$bitlyurl .= "&format=txt";
//APIを実行。結果が短縮URLになる。
$shorturl = file_get_contents($bitlyurl);

//短縮URLを表示する
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
元のURL：<?php echo $url ?><br/>
短縮URL：<?php echo $shorturl ?><br/>
</body>
</html>
