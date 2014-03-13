<?php
  //関数定義
  function sample_func($value1, $value2) {
    return "This is sample_func({$value1}, {$value2})";
  }

  header("Content-Type: text/plain; charset=UTF-8");

  echo "call_user_func関数\n";
  $result = call_user_func("sample_func", 1, 2);
  echo "sample_funcの実行結果 => ";
  var_dump($result);

  echo "call_user_func_array関数\n";
  $result = call_user_func_array("sample_func", array(1, 2));
  echo "sample_funcの実行結果 => ";
  var_dump($result);
?>