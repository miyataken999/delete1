<?php
  //「人」クラス
  class Human {
    //挨拶するメソッド
    public function greet($to_name) {
      echo "こんにちは。{$to_name}さん。\n";
    }
    //未定義のメソッド実行時のメソッド
    public function __call($method, $args) {
      echo "{$method}メソッドは定義されていません。\n";
    }
  }

  header("Content-Type: text/plain; charset=UTF-8");

  $human = new Human();

  //定義されているメソッドの実行
  $human->greet("田中");

  //定義されていないメソッドの実行
  $human->sleep();
?>