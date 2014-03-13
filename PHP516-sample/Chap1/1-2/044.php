<?php
  $consonants = array(
    "サ行", "タ行", "ナ行", "ハ行", "マ行", "ヤ行", "ラ行", "ワ行"
  );

  header("Content-Type: text/plain; charset=UTF-8");

  echo "array_unshiftの実行前\n";
  foreach($consonants as $key => $value) {
    echo "[{$key}] => [{$value}]\n";
  }

  $size = array_unshift($consonants, "ア行", "カ行");

  echo "array_unshiftの実行後\n";
  echo "要素数 = {$size}\n";
  foreach($consonants as $key => $value) {
    echo "[{$key}] => [{$value}]\n";
  }
?>
