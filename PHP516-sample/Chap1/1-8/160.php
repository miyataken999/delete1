<?php
  header("Content-Type: text/plain; charset=UTF-8");

  echo "現在のディレクトリパス => ".getcwd()."\n";

  //一つ上のディレクトリに移動する
  $result = chdir("../");
  echo "ディレクトリ移動結果 => ";
  var_dump($result);

  echo "現在のディレクトリパス => ".getcwd()."\n";
?>