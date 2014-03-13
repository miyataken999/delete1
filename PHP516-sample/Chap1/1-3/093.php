<?php
  $string_var = 'Apache/2.2.15 (Win32) PHP/5.3.5 Server at localhost Port 80';

  header("Content-Type: text/plain; charset=UTF-8");

  echo "chunk_split関数\n";
  echo chunk_split($string_var, 10);
  echo "\n";

  echo "wordwrap関数\n";
  echo wordwrap($string_var, 10);
?>