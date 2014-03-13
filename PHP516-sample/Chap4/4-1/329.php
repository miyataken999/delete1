<?php
require_once 'HTTP/Upload.php';

$message = '';

$upload = new HTTP_Upload("en");
$files = $upload->getFiles();

foreach ($files as $file) {
	if ($file->isValid()) {
		$dest_file = $file->moveTo('uploads/');
	    if (!PEAR::isError($dest_file)) {
			$message .= 'ファイルをアップロードしました。ファイル名=>' . $file->getProp('name')."<br />";
	    } else {
	        $message .=  $moved->getMessage()."<br />";
	    }
	}
}
?>

<html>
<head></head>
<body>
<?php echo $message; ?><br />
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
<input type="file" name="upload_file1"><br />
<input type="file" name="upload_file2"><br />
<input type="file" name="upload_file3"><br />
<input type="submit" value="アップロード">
</form>
</body>
</html>
