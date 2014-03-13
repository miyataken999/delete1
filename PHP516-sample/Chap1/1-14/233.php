<?php
  //例外ハンドラ
  function exception_handler($exception) {
    echo "例外が発生しました\n";
    echo "例外メッセージ => {$exception->getMessage()}\n";
  }

  header("Content-Type: text/plain; charset=UTF-8");

  set_exception_handler("exception_handler");

  //例外を発生させる
  $timezone = new DateTimeZone("Invalid TimeZone");
?>