<?php
  $consonants = array(
    "ア行", "カ行", "サ行", "タ行", "ナ行", "ハ行", "マ行"
  );

  header("Content-Type: text/plain; charset=UTF-8");

  echo "array_pushの実行前\n";
  foreach($consonants as $key => $value) {
    echo "[{$key}] => [{$value}]\n";
  }

  $size = array_push($consonants, "ヤ行", "ラ行", "ワ行");

  echo "array_pushの実行後\n";
  echo "要素数 = {$size}\n";
  foreach($consonants as $key => $value) {
    echo "[{$key}] => [{$value}]\n";
  }
?>
