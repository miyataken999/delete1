<?php
  header("Content-Type: text/html; charset=UTF-8");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>チェックボックスの値を取得する</title>
</head>
<body>
<?php
//doパラメータでフォームを表示するか、受信したデータを表示するかを判断
if($_POST['do'] != 'send') {
?>
<p>選択フォーム</p>
<form action="<?php echo basename(__FILE__) ?>" method="post" enctype="application/x-www-form-urlencoded">
<input type="hidden" name="do" value="send" />
<p>赤:<input type="checkbox" name="colors[]" value="赤" /></p>
<p>緑:<input type="checkbox" name="colors[]" value="緑" /></p>
<p>青:<input type="checkbox" name="colors[]" value="青" /></p>
<p><input type="submit" name="sendbutton" value="送信する" /></p>
</form>
<?php
}
else {
?>
<p>受信したデータ</p>
<?php
  if(is_array($_POST['colors']) == FALSE) {
?>
<p>色が選択されていません。</p>
<?php
  }
  else {
    foreach($_POST['colors'] as $color) {
?>
<p>選択した色：<?php echo htmlspecialchars($color) ?></p>
<?php
    }
?>
<?php
  }
}
?>
</body>
</html>