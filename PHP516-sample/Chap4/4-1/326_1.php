<?php
require_once 'HTTP/Request2.php';

try {

	$request = new HTTP_Request2();

	$request->setUrl("http://username:password@192.168.12.50/basic_auth/");
	$request->setMethod(HTTP_Request2::METHOD_GET);

	$response = $request->send();

    if ($response->getStatus() == 200) {
        $body = $response->getBody();
        echo $body;
    } else {
    	echo $response->getStatus();
	}
    
} catch( HTTP_Request2_Exception $e ){
    echo $e->getMessage();
}
?>