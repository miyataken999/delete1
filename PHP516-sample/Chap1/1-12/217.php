<?php
  header("Content-Type: text/plain; charset=UTF-8");

  echo "[mbstring.language] => ".ini_get("mbstring.language")."\n";

  ini_set("mbstring.language", "English");
  echo "設定値を変更しました\n";

  echo "[mbstring.language] => ".ini_get("mbstring.language")."\n";

  ini_restore("mbstring.language");
  echo "設定値を元に戻しました\n";

  echo "[mbstring.language] => ".ini_get("mbstring.language")."\n";
?>