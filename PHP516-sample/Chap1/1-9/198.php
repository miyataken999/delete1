<?php
  header("Content-Type: text/plain; charset=UTF-8");

  $options = array(
    'http' => array(
      'method' => 'GET',
      'follow_location' => FALSE,
      'timeout' => 30000
     )
  );

  $http_context = stream_context_create($options);

  $fhandle = @fopen("http://www.shuwasystem.co.jp/index.html", "rb", FALSE, $http_context);

  if($fhandle === FALSE) {
    echo "URLが開けません";
  }
  else {
    echo "URLを開きました\n";

    $metadata = stream_get_meta_data($fhandle);

    echo "HTTPリソースのストリーム情報\n";
    print_r($metadata);

    fclose($fhandle);
  }
?>