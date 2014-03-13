<?php
    //「動物」クラス
  class Animal {
    //種別名プロパティ
    public $kind_name;
    //性別プロパティ
    public $sex;
    //年齢プロパティ
    public $age;

    //未定義のプロパティ代入時のメソッド
    public function __set($name, $value) {
      echo "{$name}は定義されていません。\n";
    }

    //未定義のプロパティ参照時のメソッド
    public function __get($name) {
      echo "{$name}は定義されていません。代わりにNULLを返します。\n";
      return NULL;
    }
  }

  header("Content-Type: text/plain; charset=UTF-8");

  $lion = new Animal();

  //定義されている変数への代入
  $lion->kind_name = "ライオン";
  $lion->age = 10;
  $lion->sex = "オス";

  //定義されている変数の参照
  echo "この動物は{$lion->kind_name}で{$lion->age}才の{$lion->sex}です。\n";

  //定義されていない変数への代入
  $lion->weight = 150;

  //定義されている変数の参照
  echo "この動物は{$lion->kind_name}で体重は{$lion->weight}kgです。\n";
?>