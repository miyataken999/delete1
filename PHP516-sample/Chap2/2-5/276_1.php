<?php
  header("Content-Type: text/plain; charset=UTF-8");

  echo "出力バッファリング有効化する前です。\n";

  //出力バッファリング有効化
  ob_start();

  echo "出力バッファリング有効化した後です。\n";

  //内部バッファをフラッシュ（実際に出力）する
  ob_flush();
  flush();

  echo "内部バッファをクリアされるので表示されない文字列です。\n";

  //内部バッファをクリアして出力バッファリングを無効にする
  ob_end_clean();

  echo "出力バッファリングを元に戻した後です。\n";
?>