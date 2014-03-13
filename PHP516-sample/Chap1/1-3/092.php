<?php
  $string_var = "\t\t あいうえお \r\n";

  header("Content-Type: text/plain; charset=UTF-8");

  echo "trim前\n";
  var_dump($string_var);

  echo "trim後\n";
  var_dump(trim($string_var));
?>