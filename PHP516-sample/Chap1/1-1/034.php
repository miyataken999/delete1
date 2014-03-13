<?php
  //カウンターをインクリメントする関数
  function increment() {
    static $counter=0;
    $counter++;
    return $counter;
  }

  header("Content-Type: text/plain; charset=UTF-8");

  echo increment()."回目の実行\n";
  echo increment()."回目の実行\n";
  echo increment()."回目の実行\n";
?>