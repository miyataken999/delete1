<?php
  header("Content-Type: text/html; charset=UTF-8");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>スクリプトのコードを表示する</title>
</head>
<body>
<p>262.phpファイルのハイライト出力</p>
<?php
  //ソースのハイライト結果を出力
  highlight_file("262.php", FALSE);
?>
</body>
</html>