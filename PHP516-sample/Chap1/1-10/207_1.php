<?php
  header("Content-Type: text/plain; charset=UTF-8");

  $value = 123;
  echo "元の変数 => ";
  var_dump($value);

  unset($value);
  echo "破棄後の変数 => ";
  var_dump($value);
?>