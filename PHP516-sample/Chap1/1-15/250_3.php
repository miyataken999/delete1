<?php
  //「動物」クラス
  class Animal {
    //コンストラクタ
    function __construct() {
      echo "Animalクラスがインスタンス化されました。\n";
    }

    //「食べる」メソッド
    function eat($menu) {
      echo "{$menu}を食べます\n";
    }
  }
?>