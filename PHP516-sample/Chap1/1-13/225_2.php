<?php
  //このコマンドはWindowsの実行環境でしか動作しません
  $command = "dir /Q";

  header("Content-Type: text/plain; charset=UTF-8");

  $safe_command = escapeshellcmd($command);
  echo "実行するコマンド => ".$safe_command."\n";

  $last_line = exec($safe_command, $lines, $status);

  echo "コマンド出力の最終行 => ".mb_convert_encoding($last_line, "UTF-8", "SJIS")."\n";
  echo "コマンド実行結果のステータス => {$status}\n";

  echo "コマンド出力結果\n";
  foreach($lines as $line) {
    rtrim($line);
    echo mb_convert_encoding($line, "UTF-8", "SJIS")."\n";
  }
?>