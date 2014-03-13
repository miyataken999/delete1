<?php
  header("Content-Type: text/plain; charset=UTF-8");

  $result = trigger_error("カスタムエラーです", E_USER_WARNING);

  echo "エラー発生結果 => ";
  var_dump($result);
?>