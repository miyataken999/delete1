<?php
  //自動的にロードする関数
  function __autoload($class_name) {
    if($class_name == 'Animal') {
      echo "252_3.phpファイルをインクルードします\n";
      require_once('252_3.php');
    }
    else if($class_name == 'Human') {
      echo "252_2.phpファイルをインクルードします\n";
      require_once('252_2.php');
    }
  }

  header("Content-Type: text/plain; charset=UTF-8");

  //__autoload関数を実行せずに定義されているか判断
  $result =  class_exists("Human", FALSE);
  echo "Humanクラスは".($result === TRUE ? "定義されている":"定義されていない")."\n";

  //__autoload関数を実行してから定義されているか判断
  $result =  class_exists("Human", TRUE);
  echo "Humanクラスは".($result === TRUE ? "定義されている":"定義されていない")."\n";

  //第2引数を省略した場合
  $result =  class_exists("Animal");
  echo "Animalクラスは".($result === TRUE ? "定義されている":"定義されていない")."\n";

  //存在しないクラス名
  $result =  class_exists("Lion");
  echo "Lionクラスは".($result === TRUE ? "定義されている":"定義されていない")."\n";
?>