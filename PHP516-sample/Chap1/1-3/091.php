<?php
  $string_var = '\\\'\\\!\"\#\$\%\&\(\)\=\~\|\{\`\*\}\+\_\?\ \<\>';

  header("Content-Type: text/plain; charset=UTF-8");

  echo "エスケープ前 = {$string_var}\n";

  echo "stripcslashes関数\n";
  echo "エスケープ後 = ".stripcslashes($string_var)."\n";

  echo "stripslashes関数\n";
  echo "エスケープ後 = ".stripslashes($string_var)."\n";
?>