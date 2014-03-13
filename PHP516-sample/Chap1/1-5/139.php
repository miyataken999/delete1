<?php
  $string_var = "Ｔｈｉｓ　ｉｓ　ａ　Ｐｅｎｃｉｌ．";

  header("Content-Type: text/plain; charset=UTF-8");

  //「Ｐｅｎ」から始まる単語にマッチ
  $pattern = "Ｐｅｎ([ａ-ｚＡ-Ｚ]+)";
  $result = mb_ereg($pattern, $string_var, $matches);

  echo "戻り値(マッチ文字列のバイト数) => {$result}\n";
  echo "マッチ文字列格納配列\n";
  print_r($matches);
?>