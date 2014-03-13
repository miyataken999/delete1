<?php
  $string_var = 'abcdefgABCDEFG0123456789\'\!"#$%&()=~|{`*}+_? <>';

  header("Content-Type: text/plain; charset=UTF-8");

  echo "エスケープ前 = {$string_var}\n";

  echo "addcslashes関数\n";
  echo "エスケープ後 = ".addcslashes($string_var, 'a..zA..Z0..9')."\n";

  echo "addslashes関数\n";
  echo "エスケープ後 = ".addslashes($string_var)."\n";

  echo "quotemeta関数\n";
  echo "エスケープ後 = ".quotemeta($string_var)."\n";
?>