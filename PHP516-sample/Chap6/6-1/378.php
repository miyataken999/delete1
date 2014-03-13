<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>利用可能なドライバ名を取得する</title>
</head>
<body>
<?php
echo "◆利用可能ドライバ一覧<br />";
$drivers = PDO::getAvailableDrivers();
foreach($drivers as $driver){
  echo "$driver<br />";
}
?>
</body>
</html>