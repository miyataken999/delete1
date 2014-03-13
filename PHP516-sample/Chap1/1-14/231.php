<?php
  header("Content-Type: text/plain; charset=UTF-8");

  try {
    //例外を発生させる
    $timezone = new DateTimeZone("Invalid TimeZone");

    //ここに到達した場合は例外が発生していない
    echo "例外が発生しませんでした\n";
  }
  catch(Exception $e) {
    echo "Exceptionクラスの例外をキャッチしました\n";
    echo "エラーメッセージ => {$e->getMessage()}\n";
  }
?>