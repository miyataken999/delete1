<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>猫認証する</title>
</head>
<body>
<?php
require_once("Asirra/AsirraCheck.inc.php");
check_asirra();
echo "認証されました。ようこそ。{$_POST['yourname']}さん";

?>
</body>
</html>
