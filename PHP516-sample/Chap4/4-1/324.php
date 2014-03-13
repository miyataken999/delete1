<?php
require_once 'HTTP/Request2.php';

try {

	$request = new HTTP_Request2();
	$request->setUrl("http://www.yahoo.co.jp/");
	$request->setMethod(HTTP_Request2::METHOD_GET);    
	$request->setHeader("user-agent", "PEAR HTTP_Request2");

	$response = $request->send();

	if ($response->getStatus() == 200) {
		$body = $response->getBody();
		echo $body;
	} else {
		echo $response->getStatus();
	}

} catch (HTTP_Request2_Exception $e) {
	echo $e->getMessage();
}
?>
