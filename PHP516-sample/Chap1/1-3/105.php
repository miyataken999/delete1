<?php
  $string_var = "123abc4567defg";

  header("Content-Type: text/plain; charset=UTF-8");

  $position = strpos($string_var, "abc");
  echo "先頭から検索して「abc」が見つかる最初の位置 = {$position}\n";

  $position = strrpos($string_var, "567");
  echo "末尾から検索して「567」が見つかる最初の位置 = {$position}\n";

  $position = strpos($string_var, "1");
  echo "先頭に見つかる文字列の検索結果（戻り値） = ";
  var_dump($position);

  $position = strpos($string_var, "NOTFOUND");
  echo "見つからない文字列の検索結果（戻り値） = ";
  var_dump($position);
?>