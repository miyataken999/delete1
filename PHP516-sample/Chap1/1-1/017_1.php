<?php
  header("Content-Type: text/plain; charset=UTF-8");

  //エラー制御識別子を付けない場合のエラー表示
  $file_content = file("sample.txt") or die("ファイルをオープンできません。");
?>