<?php
  $singlebytes = "abcdefghijklmnopqrstuvwxyz";
  $multibytes = "ａｂｃｄｅｆｇｈｉｊｋｌｍｎｏｐｑｒｓｔｕｖｗｘｙｚ";

  header("Content-Type: text/plain; charset=UTF-8");

  echo "[シングルバイト文字]\n";
  echo "「{$singlebytes}」のバイト数 = ".strlen($singlebytes)."\n";
  echo "先頭から10バイト = ".mb_strcut($singlebytes, 0, 10)."\n";
  echo "先頭から10文字 = ".mb_substr($singlebytes, 0, 10)."\n";
  echo "\n";

  echo "[マルチバイト文字]\n";
  echo "「{$multibytes}」のバイト数 = ".strlen($multibytes)."\n";
  echo "先頭から10バイト = ".mb_strcut($multibytes, 0, 10)."\n";
  echo "先頭から10文字 = ".mb_substr($multibytes, 0, 10)."\n";
?>