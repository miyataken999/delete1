<?php
  header("Content-Type: text/plain; charset=UTF-8");

  //コードの簡略化
  //sample.txtは存在しないファイル
  //sample.txtが存在しない場合には、メッセージを出力して異常終了する。
  $handle = @fopen("sample.txt", "r") or die("ファイルをオープンできません。");
?>