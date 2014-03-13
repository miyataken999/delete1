<?php
  header("Content-Type: text/plain; charset=UTF-8");

  $float_var = 123.4;
  echo "変数1は".(is_numeric($float_var) ? "数値または数値文字列です" : "数値や数値文字列ではありません"). "\n";

  $array_var = array("value1", "value2");
  echo "変数2は".(is_array($array_var) ? "配列です" : "配列ではありません"). "\n";
  echo "変数2は".(is_resource($array_var) ? "リソースです" : "リソースではありません"). "\n";
  echo "変数2は".(is_object($array_var) ? "オブジェクトです" : "オブジェクトではありません"). "\n";
?>