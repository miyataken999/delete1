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

    $strip_filter = stream_filter_append($fhandle, "string.strip_tags", STREAM_FILTER_READ);
    echo "string.strip_tagsフィルターを追加しました\n";

    echo "タグが削除された応答データ\n";
    while($line = fgets($fhandle)) {
      //余分な空白は除いて表示
      echo trim($line);
    }

    fclose($fhandle);
  }
?>