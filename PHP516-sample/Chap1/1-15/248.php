<?php
  //「動物」抽象クラス
  abstract class Animal {
    //種別名プロパティ
    public $kind_name;

    //コンストラクタ
    function __construct($kind_name) {
      $this->kind_name = $kind_name;
    }

    //「食べる」抽象メソッド
    abstract function eat() ;
  }

  //「動物」クラスを実装した「人」クラス
  class Human extends Animal {
    //コンストラクタ
    function __construct() {
      parent::__construct('人');
    }

    //「食べる」実装メソッド
    function eat() {
      echo "{$this->kind_name}は、いただきますと言って食べる\n";
    }
  }

  //「動物」クラスを実装した「ライオン」クラス
  class Lion extends Animal {
    //コンストラクタ
    function __construct() {
      parent::__construct('ライオン');
    }

    //「食べる」実装メソッド
    function eat() {
      echo "{$this->kind_name}は、ガツガツと食べる\n";
    }
  }

  header("Content-Type: text/plain; charset=UTF-8");

  $human = new Human();
  echo "Humanクラスのeatメソッドを実行\n";
  $human->eat();
  echo "\n";

  $lion = new Lion();
  echo "Lionクラスのeatメソッドを実行\n";
  $lion->eat();
?>