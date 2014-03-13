<?php
  $consonants = array(
    "ア行", "カ行", "サ行", "タ行", "ナ行", "ハ行", "マ行"
  );

  header("Content-Type: text/plain; charset=UTF-8");

  echo "要素追加前\n";
  foreach($consonants as $key => $value) {
    echo "[{$key}] => [{$value}]\n";
  }

  $consonants[] = "ヤ行";
  $consonants[] = "ラ行";
  $consonants[] = "ワ行";

  echo "要素追加後\n";
  foreach($consonants as $key => $value) {
    echo "[{$key}] => [{$value}]\n";
  }
?>
