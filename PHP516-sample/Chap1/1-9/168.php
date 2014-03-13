<?php
  header("Content-Type: text/plain; charset=UTF-8");

  clearstatcache();

  echo "ディレクトリ".(is_dir(__FILE__) ? "である": "ではない")."\n";
  echo "ファイル".(is_file(__FILE__) ? "である": "ではない")."\n";
  echo "シンボリックリンク".(is_link(__FILE__) ? "である": "ではない")."\n";
  echo "読み込み可能".(is_readable(__FILE__) ? "である": "ではない")."\n";
  echo "書き込み可能".(is_writable(__FILE__) ? "である": "ではない")."\n";
  echo "実行可能".(is_executable(__FILE__) ? "である": "ではない")."\n";
  echo "アップロードされたファイル".(is_uploaded_file(__FILE__) ? "である": "ではない")."\n";
?>