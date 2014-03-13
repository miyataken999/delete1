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
      echo "こんにちは。私は {$this->last_name} {$this->first_name} です。";
    }
  }

  header("Content-Type: text/plain; charset=UTF-8");

  //「田中太郎」オブジェクトを作成する
  $tanaka = new Human("田中", "太郎");

  //「田中太郎」が「挨拶する」
  $tanaka->greet();
?>