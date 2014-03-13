<?php
  header("Content-Type: text/plain; charset=UTF-8");

  clearstatcache();

  echo "inode番号 => ".fileinode(__FILE__)."\n";
  echo "パーミッション => ".fileperms(__FILE__)."\n";
  echo "所有者ユーザID => ".fileowner(__FILE__)."\n";
  echo "グループID => ".filegroup(__FILE__)."\n";
  echo "ファイルサイズ => ".filesize(__FILE__)."\n";
  echo "最終アクセス時間 => ".fileatime(__FILE__)."\n";
  echo "最終更新時間 => ".filemtime(__FILE__)."\n";
  echo "最終inode変更時間 => ".filectime(__FILE__)."\n";
  echo "ファイルタイプ => ".filetype(__FILE__)."\n";
?>