<?php
  //「人」インターフェイス
  interface Human {
    //「挨拶する」抽象メソッド
    function greet() ;
  }

  //「日本人」インターフェイス
  interface Japanese extends Human {
    //「お辞儀」メソッド
    function bow() ;
  }

  //「アメリカ人」インターフェイス
  interface American extends Human {
    //「握手する」メソッド
    function handshake();
  }

  //「日本人」を実装した「鈴木さん」クラス
  class Suzuki implements Japanese {
    //「挨拶する」メソッド
    function greet() {
      echo "「こんにちは。」\n";
    }

    //「お辞儀する」メソッド
    function bow() {
      echo "腰を曲げる\n";
    }
  }

  //「アメリカ人」を実装した「トムさん」クラス
  class Tom implements American {
    //「挨拶する」メソッド
    function greet() {
      echo "「Hello.」\n";
    }

    //「握手する」メソッド
    function handshake() {
      echo "手を差し出す\n";
    }
  }

  header("Content-Type: text/plain; charset=UTF-8");

  $suzuki = new Suzuki();
  echo "\$suzukiは".($suzuki instanceof Human ? "人です":"人ではありません")."\n";
  echo "\$suzukiは".($suzuki instanceof Japanese ? "日本人です":"日本人ではありません")."\n";
  echo "\$suzukiは".($suzuki instanceof American ? "アメリカ人です":"アメリカ人ではありません")."\n";
  echo "\n";

  $tom = new Tom();
  echo "\$tomは".($tom instanceof Human ? "人です":"人ではありません")."\n";
  echo "\$tomは".($tom instanceof Japanese ? "日本人です":"日本人ではありません")."\n";
  echo "\$tomは".($tom instanceof American ? "アメリカ人です":"アメリカ人ではありません")."\n";
?>