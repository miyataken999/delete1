<?php
  //このコマンドは一部のLinuxの実行環境でしか動作しません
  $command = "ls -l";

  header("Content-Type: text/plain; charset=UTF-8");

  $safe_command = escapeshellcmd($command);
  echo "実行するコマンド => ".$safe_command."\n";

  $last_line = exec($safe_command, $lines, $status);

  echo "コマンド出力の最終行 => {$last_line}\n";
  echo "コマンド実行結果のステータス => {$status}\n";

  echo "コマンド出力結果\n";
  foreach($lines as $line) {
    rtrim($line);
    echo $line."\n";
  }
?>