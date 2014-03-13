<?php
  header("Content-Type: text/plain; charset=UTF-8");

  $result = eval('echo "eval関数の中のecho関数です。\n";');

  echo "eval関数の実行結果（return文なし) => ";
  var_dump($result);

  $result = eval('return 100 % 7;');

  echo "eval関数の実行結果（return文あり） => ";
  var_dump($result);

  $result = @eval('パースエラーになる文字列');

  echo "eval関数の実行結果（パースエラー） => ";
  var_dump($result);
?>