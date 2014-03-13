<?php
  //このプログラムはWindows系の実行環境では正しく動作しません

  $values = array(123.0, 12.345, 120000.0, -3000.0, 0.0);

  header("Content-Type: text/plain; charset=UTF-8");

  //ロケールを英語（アメリカ合衆国）に設定する
  setlocale(LC_MONETARY, 'en_US');

  foreach($values as $value) {
    echo "[{$value}] => ".number_format($value, 3);
    echo " => ".money_format('%.2n', $value)."\n";
  }
?