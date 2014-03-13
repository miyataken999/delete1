<?php
  //「動物」クラス
  class Animal {
    //種別名プロパティ
    public $kind_name;
    //性別プロパティ
    public $sex;
    //年齢プロパティ
    public $age;

    //コンストラクタ（インスタンス化するメソッド）
    function __construct($kind_name, $sex, $age) {
      $this->kind_name = $kind_name;
      $this->sex = $sex;
      $this->age = $age;
    }

    //「食べる」メソッド
    function eat($menu) {
      echo "{$menu}を食べます\n";
    }

    //「寝る」メソッド（子クラスからアクセス可能）
    protected function sleep() {
      echo "Zzz...\n";
    }
  }

  //「動物」クラスを継承した「人」クラス
  class Human extends Animal {
    //名前プロパティ
    public $first_name;
    //苗字プロパティ
    public $last_name;

    //コンストラクタ（インスタンス化するメソッド）
    function __construct($last_name, $first_name, $sex, $age) {
      //親クラスのコンストラクタを実行
      parent::__construct('人', $sex, $age);
      $this->last_name = $last_name;
      $this->first_name = $first_name;
    }

    //「挨拶する」メソッド
    function greet() {
      echo "こんにちは。私は {$this->last_name} {$this->first_name}です。\n";
      //親クラスのプロパティを参照する
      echo "{$this->age}才の{$this->sex}です。\n";
    }

    //「挨拶して寝る」メソッド
    function greetAndSleep() {
      echo "おやすみなさい。\n";
      $this->sleep();
    }
  }

  header("Content-Type: text/plain; charset=UTF-8");

  //田中太郎のオブジェクトを生成
  $human = new Human('田中', '太郎', '男', 28);

  echo "人クラスのメソッドを実行\n";
  $human->greet();
  echo "\n";

  echo "動物クラスのメソッドを実行\n";
  $human->eat("ごはん");
  echo "\n";

  echo "人クラスのgreetAndSleepメソッドを実行\n";
  $human->greetAndSleep();
?>