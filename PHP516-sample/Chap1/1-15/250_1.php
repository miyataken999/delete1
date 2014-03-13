<?php
  //自動的にロードする関数
  function __autoload($class_name) {
    if($class_name == 'Animal') {
      echo "250_3.phpファイルをインクルードします\n";
      require_once('250_3.php');
    }
    else if($class_name == 'Human') {
      echo "250_2.phpファイルをインクルードします\n";
      require_once('250_2.php');
    }
    else {
      trigger_error("クラスが見つかりません。", E_ERROR);
    }
  }

  header("Content-Type: text/plain; charset=UTF-8");

  $suzuki = new Human();
  $suzuki->greet();
  echo "\n";

  $lion = new Animal();
  $lion->eat("お肉");
?>