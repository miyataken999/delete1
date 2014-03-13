<?php
  $array_var = array(
    "あ", "え", "い", "う", "え", "お", "あ", "お"
  );

  header("Content-Type: text/plain; charset=UTF-8");

  echo "変更前\n";
  foreach($array_var as $key => $value) {
    echo "[{$key}] = ";
    var_dump($value);
  }

  echo "SORT_STRINGによる重複削除後\n";
  foreach(array_unique($array_var, SORT_STRING) as $key => $value) {
    echo "[{$key}] = ";
    var_dump($value);
  }
?>