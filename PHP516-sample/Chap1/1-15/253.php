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

  echo "Animalクラスに定義されているメソッド一覧\n";
  foreach(get_class_methods("Animal") as $method_name) {
    echo $method_name."\n";
  }

  echo "Animalクラスに定義されているアクセス可能なプロパティ一覧\n";
  foreach(get_class_vars("Animal") as $name => $value) {
    echo "[$name] => {$value}\n";
  }

  echo "現在定義されているクラス名一覧\n";
  foreach(get_declared_classes() as $class_name) {
    echo $class_name."\n";
  }
?>