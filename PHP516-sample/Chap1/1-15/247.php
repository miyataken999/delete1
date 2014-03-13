<?php
  //「動物」クラス
  class Animal {
    //「食べる」メソッド
    function eat() {
      echo "食べる\n";
    }
  }

  //「動物」クラスを継承した「人」クラス
  class Human extends Animal {
    //「食べる」メソッド（オーバーライド）
    function eat() {
      echo "いただきますと言って、食べる\n";
    }
  }

  header("Content-Type: text/plain; charset=UTF-8");

  $animal = new Animal();
  echo "親クラスのeatメソッドを実行\n";
  $animal->eat();
  echo "\n";

  $human = new Human();
  echo "子クラスのeatメソッドを実行\n";
  $human->eat();
?>