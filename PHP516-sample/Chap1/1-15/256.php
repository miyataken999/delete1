<?php
    //「人」抽象クラス
  abstract class Human {
    //「挨拶する」抽象メソッド
    abstract function greet() ;
  }

  //「日本人」クラス
  class Japanese extends Human {
    //「挨拶する」メソッド
    function greet() {
      echo "「こんにちは」\n";
    }
  }

  //「ライオン」クラス
  class Lion {
    //「吠える」メソッド
    function bark() {
      echo "「がおー」\n";
    }
  }

  header("Content-Type: text/plain; charset=UTF-8");

  $suzuki = new Japanese();
  echo "\$suzukiのクラス名 => ".get_class($suzuki)."\n";
  echo "\$suzukiの親クラス名 => ".get_parent_class($suzuki)."\n";
  echo "\$suzukiはHumanクラスの子クラス".(is_subclass_of($suzuki, 'Human') ? "です。\n":"ではありません。\n");
  echo "\n";

  $tom = new Lion();
  echo "\$tomのクラス名 => ".get_class($tom)."\n";
  echo "\$tomの親クラス名 => ".get_parent_class($tom)."\n";
  echo "\$tomはHumanクラスの子クラス".(is_subclass_of($tom, 'Human') ? "です。\n":"ではありません。\n");
?>