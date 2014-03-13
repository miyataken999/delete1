<?php
  //有効期限を現在から24時間後に設定
  $lifetime = time() + 24 * 60 * 60;
  session_set_cookie_params($lifetime);

  //セッション開始
  session_start();

  header("Content-Type: text/plain; charset=UTF-8");

  echo "セッションクッキーパラメータ\n";
  var_export(session_get_cookie_params());

  //セッションを破棄
  $_SESSION = array();
  session_destroy();
?>