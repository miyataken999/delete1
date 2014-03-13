<?php
  //「動物」クラス
  class Animal {
    //定数
    const NAME = '動物';

    //プロパティ
    public $kind_name;
    public $sex;
    public $age;

    //コンストラクタ
    function __construct($kind_name, $sex, $age) {
      $this->kind_name = $kind_name;
      $this->sex = $sex;
      $this->age = $age;
    }

    //メソッド
    function eat($menu) {
      echo "{$menu}を食べます\n";
    }
    function sleep() {
      echo "Zzz...\n";
    }
  }

  header("Content-Type: text/plain; charset=UTF-8");

  $reflection = new ReflectionClass('Animal');

  echo "クラス名 => ".$reflection->getName()."\n";
  echo "ファイル名 => ".$reflection->getFileName()."\n";
  echo "クラスの定義開始行番号 => ".$reflection->getStartLine()."\n";
  echo "クラスの定義終了行番号 => ".$reflection->getEndLine()."\n";
  echo "\n";

  //定数が定義されている場合
  echo "クラスの定数一覧\n";
  foreach($reflection->getConstants() as $name => $value) {
    echo "[$name] => ";
    var_dump($value);
  }
  echo "\n";

  //プロパティが定義されている場合
  echo "クラスのpublicプロパティ名一覧\n";
  foreach($reflection->getProperties(ReflectionProperty::IS_PUBLIC) as $property) {
    echo "{$property->getName()}\n";
  }
  echo "\n";

  //プロパティが定義されている場合
  echo "クラスのpublicメソッド名一覧\n";
  foreach($reflection->getMethods(ReflectionMethod::IS_PUBLIC) as $method) {
    echo "{$method->getName()}\n";
  }
  echo "\n";

  echo "ReflectionClassを使ってクラスをインスタンス化\n";
  $lion = $reflection->newInstance("ライオン", "オス", 5);
  print_r($lion);
  echo "\n";

  echo "オブジェクトのメソッドを実行\n";
  $lion->sleep();
?>