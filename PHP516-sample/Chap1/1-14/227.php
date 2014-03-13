<?php
  $errlog_file = "./error.log";

  header("Content-Type: text/plain; charset=UTF-8");

  //ファイルにエラーを出力
  $result = error_log("エラーが発生しました\n", 3, $errlog_file);

  echo "エラーログ出力結果 => ";
  var_dump($result);

  echo "エラーログファイルの内容\n";
  //エラーログの内容を取得
  readfile($errlog_file);
?>