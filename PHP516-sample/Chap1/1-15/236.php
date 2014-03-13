<?php
  //水クラス
  class Water {
    //名前プロパティ
    public $name = '水';
  }

  header("Content-Type: text/plain; charset=UTF-8");

  //水クラスをインスタンス化する
  $water = new Water();

  echo "nameプロパティの値 => {$water->name}";
?>