<?php
  header("Content-Type: text/plain; charset=UTF-8");

  echo "通常の演算\n";
  echo "(0.3 - 0.4 + 0.1) は";
  echo (0.3 - 0.4 + 0.1)."\n";

  echo "BC演算関数での演算\n";
  echo "(0.3 - 0.4 + 0.1) は";
  //5桁までの精度で演算
  bcscale(5);
  echo bcadd(bcsub(0.3, 0.4), 0.1)."\n";

  echo "通常の比較\n";
  echo "(0.1 + 0.7) と 0.8 は";
  echo ((0.1 + 0.7) === 0.8) ? "等しい" : "等しくない", "\n";

  echo "BC演算関数での比較\n";
  echo "(0.1 + 0.7) と 0.8 は";
  echo (bccomp((0.1 + 0.7), 0.8, 2) === 0) ? "等しい" : "等しくない", "\n";
  //注意：小数点以下2桁までは等しいという意味です
?>