<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>パスワードをハッシュ化する</title>
</head>
<body>
<?php
require 'phpass-0.3/PasswordHash.php';

function _generate_password($pass, $is_portal){
  $hasher = new PasswordHash(8, $is_portal);
  $hash = $hasher->HashPassword($pass);
  return $hash;
}

function _check_password($pass, $is_portal){
  $hasher = new PasswordHash(8, $is_portal);
  $hash = $hasher->HashPassword($pass);
  return $hasher->CheckPassword('your_password', $hash);
}

// システムに依存するため移植性がないハッシュ値の生成(強度は高い)
$hash = _generate_password('your_password', true);
echo "◆生成されたハッシュ：{$hash}<br />";
$check = _check_password('your_password', true);
if ($check === true ){
  echo "パスワードの照合に成功しました。<br />";
}else{
  echo "パスワードの照合に失敗しました。<br />";
}

// システムに依存しない、移植可能なハッシュ値の生成
$hash = _generate_password('your_password', false);
echo "◆生成されたハッシュ：{$hash}<br />";
$check = _check_password('your_password', false);
if ($check === true ){
  echo "パスワードの照合に成功しました。<br />";
}else{
  echo "パスワードの照合に失敗しました。<br />";
}
?>
</body>
</html>