<?php
  header("Content-Type: text/plain; charset=UTF-8");

  foreach(localeconv() as $key => $value) {
    print "[{$key}] => ";
    print_r($value);
    echo "\n";
  }
?>