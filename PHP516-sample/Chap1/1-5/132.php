<?php
  $query_string = "first_name=%E3%82%BF%E3%83%AD%E3%82%A6&last_name=%E3%82%BF%E3%83%8A%E3%82%AB&age=30&sex=male";

  header("Content-Type: text/plain; charset=UTF-8");

  $result = mb_parse_str($query_string, $profile);

  echo "戻り値 => ";
  var_dump($result);
  echo "\n";

  echo "解析結果\n";
  foreach($profile as $key => $value) {
    echo "{$key} = {$value}\n";
  }
?>