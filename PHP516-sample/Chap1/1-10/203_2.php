<?php
  function sample_func() {
    echo "test message";
  }

  header("Content-Type: text/plain; charset=UTF-8");

  $var1 = "sample_func";
  echo "変数1は".(is_callable($var1) ? "実行可能な関数です" : "実行可能な関数ではありません"). "\n";

  $var2 = "sample_func_not_found";
  echo "変数2は".(is_callable($var2) ? "実行可能な関数です" : "実行可能な関数ではありません"). "\n";

  $object = new DateTimeZone("Asia/Tokyo");
  $var3 = array($object, "getName");
  echo "変数3は";
  if(is_callable($var3, FALSE, $name)) {
    echo "実行可能なメソッドです\n";
    echo "変数3の実行可能なメソッド名は{$name}です\n";
  }
  else {
    echo "変実行可能なメソッドではありません\n";
  }

  $var4 = "getName";
  echo "変数4は";
  if(is_callable($var4, FALSE, $name)) {
    echo "実行可能なメソッドです\n";
    echo "変数4の実行可能な関数名は{$name}です\n";
  }
  else {
    echo "実行可能なメソッドではありません\n";
  }

  //無名関数
  $var5 = function() {
    return "test";
  };
  echo "変数5は";
  if(is_callable($var5, FALSE, $name)) {
    echo "実行可能な関数です\n";
    echo "変数5の実行可能な関数名は{$name}です\n";
  }
  else {
    echo "実行可能な関数ではありません\n";
  }

?>