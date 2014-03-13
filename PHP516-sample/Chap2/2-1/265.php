<?php
  $string_var = <<<END_OF_STRING
1行目の文字列です。
2行目の文字列です。
3行目の文字列です。
END_OF_STRING;

  header("Content-Type: text/html; charset=UTF-8");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>改行文字の前に改行タグを挿入する</title>
</head>
<body>
<p>変換しないで表示した文字列</p>
<p>
<?php echo $string_var; ?>
</p>
<p>nl2br関数で変換して表示した文字列</p>
<p>
<?php echo nl2br($string_var); ?>
</p>
</body>
</html>