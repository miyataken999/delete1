<?php
  //オリジナルの例外クラス
  class MyException extends Exception {
    //全てのプロパティを継承する
  }

  header("Content-Type: text/plain; charset=UTF-8");

  try {
    //例外クラスのインスタンス化
    $my_exception = new MyException("オリジナルの例外です");

    //例外を発生させる
    throw($my_exception);
  }
  catch(MyException $e) {
    echo "MyExceptionクラスの例外をキャッチしました\n";
    echo "エラーメッセージ => {$e->getMessage()}\n";
  }
?>