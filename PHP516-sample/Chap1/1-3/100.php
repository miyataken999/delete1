<?php
  $query_string = "first_name=TARO&last_name=TANAKA&age=30&sex=male";

  header("Content-Type: text/plain; charset=UTF-8");

  parse_str($query_string, $profile);

  foreach($profile as $key => $value) {
    echo "{$key} = {$value}\n";
  }
?>