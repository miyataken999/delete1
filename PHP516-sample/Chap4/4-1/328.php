<?php
require_once 'HTTP/Upload.php';

$message = '';

$upload = new HTTP_Upload("en");
$file = $upload->getFiles("upload_file");

if ($file->isValid()) {
	$dest_file = $file->moveTo('uploads/');
    if (!PEAR::isError($dest_file)) {
		$message = 'ファイルをアップロードしました。ファイル名=>' . $file->getProp('name');
    } else {
        $message =  $moved->getMessage();
    }
}
?>

<html>
<head></head>
<body>
<?php echo $message; ?><br />
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
<input type="file" name="upload_file">
<input type="submit" value="アップロード">
</form>
</body>
</html>
