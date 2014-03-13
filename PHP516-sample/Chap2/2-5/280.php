<?php
  header("Content-Type: text/plain; charset=UTF-8");

  //ポイントでの出力バッファの状態を格納する
  $point = array();

  //ポイント0
  $point[0] = ob_get_status(TRUE);

  ob_start();

  //ポイント1
  $point[1] = ob_get_status(TRUE);

  echo "あいうえお\n";

  //ポイント2
  $point[2] = ob_get_status(TRUE);

  ob_start();

  //ポイント3
  $point[3] = ob_get_status(TRUE);

  echo "かきくけこ\n";

  //ポイント4
  $point[4] = ob_get_status(TRUE);

  echo "さしすせそ\n";

  //ポイント5
  $point[5] = ob_get_status(TRUE);

  ob_flush();
  flush();

  //ポイント6
  $point[6] = ob_get_status(TRUE);

  ob_end_clean();

  //ポイント7
  $point[7] = ob_get_status(TRUE);

  ob_end_clean();

  //ポイント8
  $point[8] = ob_get_status(TRUE);

  echo "各ポイントでの出力バッファの状態\n";
  foreach($point as $pnum => $data) {
    echo "ポイント{$pnum} => ";
    print_r($data);
  }
?>