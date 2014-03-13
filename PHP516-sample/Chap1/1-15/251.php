<?php
    //「人」クラス
  class Human {
    //名前プロパティ
    public $first_name;
    //苗字プロパティ
    public $last_name;

    //コンストラクタ（インスタンス化するメソッド）
    function __construct($last_name, $first_name) {
      $this->last_name = $last_name;
      $this->first_name = $first_name;
    }

    //「挨拶する」メソッド
    function greet() {
      echo "こんにちは。私は {$this->last_name} {$this->first_name} です。\n";
    }
  }

  header("Content-Type: text/plain; charset=UTF-8");

  $suzuki = new Human('鈴木', '太郎');
  echo "コピー前のオブジェクトを実行\n";
  $suzuki->greet();
  echo "\n";

  $tanaka = clone $suzuki;
  $tanaka->last_name = '田中';

  echo "コピー元のオブジェクトを実行\n";
  $suzuki->greet();
  echo "\n";

  echo "コピーしたオブジェクトを実行\n";
  $tanaka->greet();
?>