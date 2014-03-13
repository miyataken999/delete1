<?php
  //テストクラス
  class Test {

    //プロパティ
    public $num;

    //コンストラクタ
    public function __construct($num) {
      $this->num = $num;
    }

    //静的なメソッド
    public static function echoMessage() {
      echo "静的なメソッドを実行しました\n";
    }
  }

  header("Content-Type: text/plain; charset=UTF-8");

  //インスタンス化をせずに実行する
  Test::echoMessage();
?>