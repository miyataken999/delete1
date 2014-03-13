<?php
  //「テスト」クラス
  class Test {
    //番号
    public $num;

    //コンストラクタ
    public function __construct($num) {
      $this->num = $num;
      echo "{$this->num}のコンストラクタが実行されました\n";
    }

    //デストラクタ
    public function __destruct() {
      echo "{$this->num}のデストラクタが実行されました\n";
    }
  }

  header("Content-Type: text/plain; charset=UTF-8");

  //インスタンス化
  $test1 = new Test(1);
  $test2 = new Test(2);

  unset($test2);
  echo "test2の変数を破棄しました\n";
?>