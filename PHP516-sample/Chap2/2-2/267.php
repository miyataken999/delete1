<?php
  header("Content-Type: text/plain; charset=UTF-8");

  echo "\$_SERVER変数の内容\n";

  foreach($_SERVER as $key => $value) {
    echo "[{$key}] => ";
    var_export($value);
    echo "\n";
  }
?>