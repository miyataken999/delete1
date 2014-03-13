<?php
require_once 'HTTP/Download.php';

$params = array('file'=>'./downloadfile.txt');

$dl = new HTTP_Download($params);
$dl->send();
?>