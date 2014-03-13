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

  //HTTPのURLの応答ボディを全て読み込む
  $http_respose_body = file_get_contents("http://www.shuwasystem.co.jp/index.html", FALSE, $http_context);

  echo "HTTPのURLの応答\n";
  var_dump($http_respose_body);
?>