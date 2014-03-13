<?php
  $string1 = "abcdef";
  $string2 = "abcDEF";

  header("Content-Type: text/plain; charset=UTF-8");

  echo "strcmp(\"{$string1}\", \"{$string2}\") =>  ".strcmp($string1, $string2)."\n";
  echo "strcasecmp(\"{$string1}\", \"{$string2}\") =>  ".strcasecmp($string1, $string2)."\n";
  echo "strncmp(\"{$string1}\", \"{$string2}\", 3) =>  ".strncmp($string1, $string2, 3)."\n";
  echo "strncasecmp(\"{$string1}\", \"{$string2}\", 4) =>  ".strncasecmp($string1, $string2, 4)."\n";
  ?>