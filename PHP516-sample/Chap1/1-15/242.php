<?php
  //テストクラス
  class Test {

    //静的な変数
    public static $static_value = 1000;
    //プロパティ
    public $num;

    //コンストラクタ
    public function __construct($num) {
      $this->num = $num;
    }

    //静的な変数を出力するメソッド
    public function echoStaticValue() {
      echo "Test{$this->num}関数の\$static_valueの値 => ".self::$static_value."\n";
    }

    //静的な変数を変更するメソッド
    public function setStaticValue($value) {
      self::$static_value = $value;
      echo "Test{$this->num}関数の\$static_valueを変更\n";
    }
  }

  header("Content-Type: text/plain; charset=UTF-8");

  echo "Testクラスの\$static_valueの値 => ".Test::$static_value."\n";

  $test1 = new Test(1);
  $test1->echoStaticValue();

  $test2 = new Test(2);
  $test2->echoStaticValue();

  //$test1のメソッドで値を変更
  $test1->setStaticValue(123);

  $test1->echoStaticValue();
  $test2->echoStaticValue();

  echo "Testクラスの\$static_valueの値 => ".Test::$static_value."\n";
?>