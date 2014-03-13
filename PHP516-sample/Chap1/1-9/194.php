<?php
  $ini_file = "test.ini";
  $ini_contents = <<<END_OF_INI
; テスト用INIファイル
; セミコロンから始まる行はコメントです
[TEST_DATA]
setting1 = abcdef
setting2 = 12345
END_OF_INI;

  header("Content-Type: text/plain; charset=UTF-8");

  //設定ファイルを作成する
  file_put_contents($ini_file, $ini_contents, LOCK_EX);

  echo "設定ファイルの内容\n";
  echo file_get_contents($ini_file), "\n\n";

  $settings = parse_ini_file($ini_file, TRUE);

  echo "設定ファイルの解析結果\n";
  var_dump($settings);
?>