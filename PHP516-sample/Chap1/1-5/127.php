<?php
  header("Content-Type: text/plain; charset=UTF-8");

  echo "mb_language = ".mb_language()."\n";
  echo "mb_internal_encoding = ".mb_internal_encoding()."\n";
  echo "mb_detect_order = \n";
  print_r(mb_detect_order());
  echo "\n";
  echo "mb_http_input = ".mb_http_input()."\n";
  echo "mb_http_output = ".mb_http_output()."\n";
  echo "mb_substitute_character = ".mb_substitute_character()."\n";
  echo "mb_list_encodings\n";
  print_r(mb_list_encodings());
  echo "\n";
  echo "mb_regex_encoding = ".mb_regex_encoding()."\n";
  echo "mb_get_info = \n";
  print_r(mb_get_info("all"));
  echo "\n";
?>