<?php
  //全ての引数の合計を計算する
  function summary() {
    $total = 0;
    //全引数の配列を取得
    $arg_array = func_get_args();
    foreach($arg_array as $value) {
      //数値と数値文字列以外は計算しない
      if(is_numeric($value)) {
        $total += $value;
      }
    }
    return $total;
  }

  header("Content-Type: text/plain; charset=UTF-8");

  echo summary()."\n";
  echo summary(1)."\n";
  echo summary(1,2,3,4,5,6,7,8,9,10)."\n";
  echo summary("abc","あいうえお",100,200,"300")."\n";
?>