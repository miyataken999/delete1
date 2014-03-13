<?php
  $ten_array = array(
    10,		//整数値の10
    10.0,	//浮動小数点数値の10
    "10",	//10進数表記文字列の10
    "012",	//8進数表記文字列の10
    "0x0a",	//16進数表記文字列の10
    "10.0",	//浮動小数点数文字列の10
    "1e1"	//浮動小数点数文字列の10
  );

  header("Content-Type: text/plain; charset=UTF-8");

  echo "変更前\n";
  foreach($ten_array as $key => $value) {
    echo "[{$key}] = ";
    var_dump($value);
  }

  echo "SORT_REGULARによる重複削除後\n";
  foreach(array_unique($ten_array, SORT_REGULAR) as $key => $value) {
    echo "[{$key}] = ";
    var_dump($value);
  }

  echo "SORT_NUMERICによる重複削除後\n";
  foreach(array_unique($ten_array, SORT_NUMERIC) as $key => $value) {
    echo "[{$key}] = ";
    var_dump($value);
  }

  echo "SORT_STRINGによる重複削除後\n";
  foreach(array_unique($ten_array, SORT_STRING) as $key => $value) {
    echo "[{$key}] = ";
    var_dump($value);
  }

  echo "SORT_LOCALE_STRINGによる重複削除後\n";
  foreach(array_unique($ten_array, SORT_LOCALE_STRING) as $key => $value) {
    echo "[{$key}] = ";
    var_dump($value);
  }
?>