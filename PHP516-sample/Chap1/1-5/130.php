<?php
  $kana1 = "かたかな";
  $kana2 = "カタカナ";
  $kana3 = "ｶﾀｶﾅ";
  $kana4 = "ａｂｃＡＢＣ";
  $kana5 = "ｐｈｐのマルチバイト文字";

  header("Content-Type: text/plain; charset=UTF-8");

  echo "[{$kana1}] => ".mb_convert_kana($kana1, "C")."\n";
  echo "[{$kana2}] => ".mb_convert_kana($kana2, "k")."\n";
  echo "[{$kana3}] => ".mb_convert_kana($kana3, "KV")."\n";
  echo "[{$kana4}] => ".mb_convert_kana($kana4, "r")."\n";
  echo "[{$kana5}] => ".mb_convert_kana($kana5, "kah")."\n";
?>