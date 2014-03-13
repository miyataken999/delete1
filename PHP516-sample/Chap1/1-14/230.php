<?php

  function step1() {
    echo "ステップ1の関数です\n";
    step2();
  }

  function step2() {
    echo "ステップ2の関数です\n";
  	step3();
  }

  function step3() {
    echo "ステップ3の関数です\n";

    echo "debug_print_backtrace関数\n";
    debug_print_backtrace();
    echo "\n";

    echo "debug_backtrace関数\n";
    print_r(debug_backtrace());
  }


  header("Content-Type: text/plain; charset=UTF-8");

  step1();
?>