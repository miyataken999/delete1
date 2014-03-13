<?php
require_once 'HTTP/Request2.php';

try {

	$request = new HTTP_Request2();

	$request->setUrl("http://192.168.12.50/digest_auth/");
	$request->setAuth('username', 'password', HTTP_Request2::AUTH_DIGEST);
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