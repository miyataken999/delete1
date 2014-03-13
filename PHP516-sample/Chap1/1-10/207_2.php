<?php
  //ローカル変数のみ破棄する関数
  function destroy1() {
    global $value;
    unset($value);
  }

  //グローバル変数を破棄する関数
  function destroy2() {
    unset($GLOBALS['value']);
  }

  header("Content-Type: text/plain; charset=UTF-8");

  $value = 123;
  echo "元のグローバル変数 => ";
  var_dump($value);

  destroy1();

  echo "destory1後のグローバル変数 => ";
  var_dump($value);

  destroy2();

  echo "destory2後のグローバル変数 => ";
  var_dump($value);
?>