<?php
require_once 'HTTP/Request2.php';

try {

	$request = new HTTP_Request2();
	$request->setUrl("http://search.yahoo.co.jp/search");
	$request->setMethod(HTTP_Request2::METHOD_POST);

	$request->addPostParameter('p', 'PHP');
	
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