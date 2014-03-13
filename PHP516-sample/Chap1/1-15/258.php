<?php
  //「動物」クラス
  class Animal {
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

    function sleep() {
      echo "Zzz...\n";
    }
  }

  header("Content-Type: text/plain; charset=UTF-8");

  $lion = new Animal("ライオン", "オス", 10);
  echo "シリアル化前のオブジェクト\n";
  print_r($lion);
  echo "\n";

  $serialized = serialize($lion);

  echo "シリアル化した文字列\n";
  echo "{$serialized}\n";
  echo "\n";

  $var_lion = unserialize($serialized);

  echo "元のオブジェクトに変換した結果\n";
  print_r($var_lion);

  echo "オブジェクトのメソッド実行結果\n";
  $var_lion->sleep();
?>