<?php
  header("Content-Type: text/plain; charset=UTF-8");

  echo "出力1\n";

  //外側の出力バッファリング
  ob_start();

  echo "出力2\n";

  //内側の出力バッファリング
  ob_start();

    echo "出力3\n";

  //内側の出力バッファリングをフラッシュ
  ob_end_flush();
  flush();

  echo "出力4\n";

  //外側の出力バッファリングをクリア
  ob_clean();

  echo "出力5\n";

  //外側の出力バッファリングをフラッシュ
  ob_end_flush();
  flush();
?>