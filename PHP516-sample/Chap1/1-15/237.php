<?php
  //「動物」クラス
  class Animal {
    //コンストラクタ
    public function __construct() {
      echo "動物クラスがインスタンス化されました\n";
    }
  }

  header("Content-Type: text/plain; charset=UTF-8");

  //インスタンス化
  $animal = new Animal();
?>