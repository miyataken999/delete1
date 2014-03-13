<?php
  header("Content-Type: text/plain; charset=UTF-8");

  $value = 123;
  echo "元の変数 => ";
  var_dump($value);
  echo "\n";

  echo "論理値型への変換\n";
  if(settype($value, "bool")) {
    echo "変換に成功しました\n";
    var_dump($value);
  }
  else {
    echo "変換に失敗しました\n";
  }
?>