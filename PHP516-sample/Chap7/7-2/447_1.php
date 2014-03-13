<?php session_start(); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>CAPTCHAを用いた認証</title>
</head>
<body>
<form name="captcha_form" action="447_2.php" method="post">
氏名：<input type="text" name="yourname"><br />
CAPTCHAの文字を入力：<input type="text" name="captcha_code" size="10" maxlength="6" /><br />

<!--画像を表示するにはsecurimage_show.phpを画像ソースに指定する。-->
<!--画像の難易度やColorを変更するときは、securimage_show.php を直接変更-->
<img id="captcha" src="./securimage/securimage_show.php"/><br />

<!--CAPTCHA画像変更リンク-->
<a href="#" onclick="document.getElementById('captcha').src = './securimage/securimage_show.php?' + Math.random(); return false">[CAPTCHAを変更]</a>

<!--CAPTCHA音声読み上げ-->
<object type="application/x-shockwave-flash" data="./securimage/securimage_play.swf?audio=./securimage/securimage_play.php&amp;bgColor1=#fff&amp;bgColor2=#fff&amp;iconColor=#777&amp;borderWidth=1&amp;borderColor=#000" width="19" height="19">
  <param name="movie" value="./securimage/securimage_play.swf?audio=./securimage/securimage_play.php&amp;bgColor1=#fff&amp;bgColor2=#fff&amp;iconColor=#777&amp;borderWidth=1&amp;borderColor=#000" />
</object>
<br />
<input type="submit" value="送信">
</form>
</body>
</html>
