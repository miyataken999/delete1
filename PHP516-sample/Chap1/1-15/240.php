<?php
  //「動物」クラス
  class Animal {
    //種別名プロパティ
    public $kind_name;
    //性別プロパティ
    public $sex;
    //年齢プロパティ
    public $age;

    //コンストラクタ（インスタンス化するメソッド）
    function __construct($kind_name, $sex, $age) {
      $this->kind_name = $kind_name;
      $this->sex = $sex;
      $this->age = $age;
    }
  }

  header("Content-Type: text/plain; charset=UTF-8");

  //10才、オスのライオンオブジェクトを作成する
  $lion = new Animal("ライオン", "オス", 10);

  echo "この動物は{$lion->kind_name}で{$lion->age}才の{$lion->sex}です。\n";
?>