<?php
  header("Content-Type: text/html; charset=UTF-8");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>フォームデータを取得する</title>
</head>
<body>
<?php
//doパラメータでフォームを表示するか、受信したデータを表示するかを判断
if($_POST['do'] != 'send') : ?>
<p>データ送信フォーム</p>
<form action="<?php echo basename(__FILE__) ?>" method="post" enctype="application/x-www-form-urlencoded">
<input type="hidden" name="do" value="send" />
<p>お名前：<input type="text" name="your_name" value="" /></p>
<p>性別：<input type="radio" name="your_sex" value="male" />男性
<input type="radio" name="sex" value="female" />女性</p>
<p><input type="submit" name="sendbutton" value="送信する" /></p>
</form>
<?php else : ?>
<p>受信したデータ</p>
<p>お名前：<?php echo htmlspecialchars($_POST['your_name']) ?></p>
<p>性別：<?php echo ($_POST['your_sex'] == 'male' ? "男性": "女性") ?></p>
<?php endif ?>
</body>
</html>