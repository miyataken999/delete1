<?php
  $pattern = '/[:\/\.]/';
  $string_var = "http://www.example.com/sample/page.php";

  header("Content-Type: text/plain; charset=UTF-8");

  $result = preg_split($pattern, $string_var, -1, PREG_SPLIT_NO_EMPTY);
  print_r($result);
?>