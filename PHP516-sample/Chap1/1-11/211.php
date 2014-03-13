<?php
  //関数定義
  function sample_func() {
    //何もしない
  }

  header("Content-Type: text/plain; charset=UTF-8");

  //定義済み関数
  echo "sample_func関数 => ";
  var_dump(function_exists("sample_func"));

  //定義していない関数
  echo "sample_func2関数 => ";
  var_dump(function_exists("sample_func2"));
?>