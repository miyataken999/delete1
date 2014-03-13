<?php
  $string_var = "１２３ＡＢＣあかさたな４５６７ＤＥＦ";

  header("Content-Type: text/plain; charset=UTF-8");

  $position = mb_strpos($string_var, "ＡＢＣ");
  echo "先頭から検索して「ＡＢＣ」が見つかる最初の位置 = {$position}\n";

  $position = mb_strrpos($string_var, "かさ");
  echo "末尾から検索して「かさ」が見つかる最初の位置 = {$position}\n";

  $position = mb_strpos($string_var, "１");
  echo "先頭に見つかる文字列の検索結果（戻り値） = ";
  var_dump($position);

  $position = mb_strpos($string_var, "ＮＯＴＦＯＵＮＤ");
  echo "見つからない文字列の検索結果（戻り値） = ";
  var_dump($position);
?>