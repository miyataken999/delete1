<?php
  header("Content-Type: text/plain; charset=UTF-8");

  //現在ディレクトリ
  $current = getcwd();

  echo "現在パーティションの空き容量 => ".disk_free_space($current)."バイト\n";
  echo "現在パーティションの合計容量 => ".disk_total_space($current)."バイト\n";
?>