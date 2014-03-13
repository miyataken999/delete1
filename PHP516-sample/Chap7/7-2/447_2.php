<?php session_start(); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>CAPTCHAを用いた認証</title>
</head>
<body>
<?php
require_once('./securimage/securimage.php');
$securimage = new Securimage();
var_dump($_POST["captcha_code"]);
$check = $securimage->check($_POST['captcha_code']);
var_dump($check);
if( $check === true ){
  echo "{$_POST['yourname']}さん、正しいCAPTCHAが入力されました。";
}else{
  echo "正しいCAPTCHAが入力されませんでした。";
}
?>
</body>
</html>
