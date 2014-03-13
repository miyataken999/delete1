<?php
  header("Content-Type: text/plain; charset=UTF-8");

  echo "現在のエラー出力レベル => ".error_reporting()."\n";

  //E_ALLからE_NOTICEを除くレベル
  error_reporting(E_ALL ^ E_NOTICE);

  echo "変更後のエラー出力レベル => ".error_reporting()."\n";
?>