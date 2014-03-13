<?php
  //このプログラムはLinuxの実行環境でしか動作しません。
  $command = "ls -l test.txt; cat /etc/passwd";

  header("Content-Type: text/plain; charset=UTF-8");

  echo "安全でないコマンド => {$command}\n";
  echo "安全なコマンド => ".escapeshellcmd($command)."\n";
?>