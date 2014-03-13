<?php
  $string_var = "/opt/ABC/abc/abc_sample.php";

  header("Content-Type: text/plain; charset=UTF-8");

  echo "strstr関数\n";
  echo strstr($string_var, "abc", FALSE)."\n";
  echo "strchr関数\n";
  echo strchr($string_var, "abc", FALSE)."\n";

  echo "strrchr関数\n";
  echo strrchr($string_var, "/")."\n";
?>