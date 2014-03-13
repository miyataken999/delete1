<?php
  $string_var = 'PHP is especially suited for web development and can be embedded into HTML.';

  header("Content-Type: text/plain; charset=UTF-8");

  echo "出現した文字一覧 = ".count_chars($string_var, 3)."\n";
  echo "beの出現回数 = ".substr_count($string_var, "be")."\n";
  echo "出現した単語一覧\n";
  foreach(str_word_count($string_var, 1) as $key => $word) {
    echo "[{$key}] = {$word}\n";
  }
?>