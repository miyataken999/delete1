<?php
  //関数定義
  function sample_func() {
    //何もしない
  }

  header("Content-Type: text/plain; charset=UTF-8");

  echo "定義済み関数一覧\n";
  print_r(get_defined_functions());
?>