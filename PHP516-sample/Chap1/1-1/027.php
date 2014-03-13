<?php
  //素数格納配列
  $prime_array = array();
  header("Content-Type: text/plain; charset=UTF-8");

  //100までの素数を計算する
  for($num=2; $num<100; $num++) {
    //素数格納配列の要素で割り切れなければ素数
    foreach($prime_array as $prime_num) {
      if($num % $prime_num == 0) {
        continue 2;  //割り切れたので残りの処理をスキップ
      }
    }
    $prime_array[] = $num;
    echo "{$num}\n";
  }
?>