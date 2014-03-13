<?php
  //「人」クラス
  class Human {
    //挨拶するメソッド
    public function greet($to_name) {
      echo "こんにちは。{$to_name}さん。";
    }
  }

  header("Content-Type: text/plain; charset=UTF-8");

  $human = new Human();

  //メソッドを実行
  $human->greet("田中");
?>