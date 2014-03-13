<?php
  header("Content-Type: text/html; charset=UTF-8");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ファイルをアップロードする</title>
</head>
<body>
<?php
//doパラメータでフォームを表示するか、受信したデータを表示するかを判断
if($_POST['do'] != 'send') {
?>
<p>ファイルアップロードフォーム</p>
<form action="<?php echo basename(__FILE__) ?>" method="post" enctype="multipart/form-data">
<input type="hidden" name="do" value="send" />
<p>お名前：<input type="text" name="your_name" value="" /></p>
<p><input type="file" name="your_file" /></p>
<p><input type="submit" name="sendbutton" value="送信する" /></p>
</form>
<?php
}
else {
  //エラーコードが成功以外の場合にはエラーを表示する
  if($_FILES['your_file']['error'] !== UPLOAD_ERR_OK) {
?>
<p>ファイルのアップロードに失敗しました</p>
<p>エラーコード(数値)：<?php echo htmlspecialchars($_FILES['your_file']['error']) ?></p>
<?php
  }
  else {
?>
<p>受信したデータ</p>
<p>お名前：<?php echo htmlspecialchars($_POST['your_name']) ?></p>
<p>アップロードしたファイル</p>
<p>ファイル名：<?php echo htmlspecialchars($_FILES['your_file']['name']) ?></p>
<p>ファイルタイプ：<?php echo htmlspecialchars($_FILES['your_file']['type']) ?></p>
<p>ファイルサイズ：<?php echo htmlspecialchars($_FILES['your_file']['size']) ?></p>
<?php
  }
}
?>
</body>
</html>