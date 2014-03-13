<?php
  //テストクラス
  class Test {
    //テストの定数
    const CONSTANT_VALUE = 123456789;

    public function echoConstantValue() {
      echo "CONSTANT_VALUEの値 => ".self::CONSTANT_VALUE."\n";
    }
  }

  header("Content-Type: text/plain; charset=UTF-8");

  echo "TestクラスのCONSTANT_VALUEの値 => ".Test::CONSTANT_VALUE."\n";

  $test = new Test();
  $test->echoConstantValue();
?>