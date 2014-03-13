<?php
  //「動物」クラス
  class Animal {
    public $kind_name;
    public $sex;
    public $age;

    function __construct($kind_name, $sex, $age) {
      $this->kind_name = $kind_name;
      $this->sex = $sex;
      $this->age = $age;
    }

    function eat($menu) {
      echo "{$menu}を食べます\n";
    }

    protected function sleep() {
      echo "Zzz...\n";
    }
  }

  header("Content-Type: text/plain; charset=UTF-8");

  //インスタンス化
  $lion = new Animal("ライオン", "オス", 10);

  echo "\$lionオブジェクトに定義されているプロパティ一覧\n";
  foreach(get_object_vars($lion) as $name => $value) {
    echo "[$name] => {$value}\n";
  }
?>