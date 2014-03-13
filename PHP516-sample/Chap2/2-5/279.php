<?php
  header("Content-Type: text/plain; charset=UTF-8");

  //ポイントでの出力バッファデータを格納する
  $point = array();

  //ポイント0（出力バッファリング開始前）
  $point[0] = ob_get_contents();

  ob_start();

  //ポイント1
  $point[1] = ob_get_contents();

  echo "あいうえお\n";

  //ポイント2
  $point[2] = ob_get_contents();

  ob_clean();

  //ポイント3
  $point[3] = ob_get_contents();

  echo "かきくけこ\n";

  //ポイント4
  $point[4] = ob_get_contents();

  echo "さしすせそ\n";

  //ポイント5
  $point[5] = ob_get_contents();

  ob_flush();
  flush();

  //ポイント6
  $point[6] = ob_get_contents();

  ob_end_clean();

  //ポイント7（出力バッファリング終了後）
  $point[7] = ob_get_contents();

  echo "各ポイントでの出力バッファのデータ\n";
  foreach($point as $pnum => $data) {
    echo "ポイント{$pnum} => ";
    var_dump($data);
  }
?>