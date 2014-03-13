<?php
  //セッション開始
  session_start();

  header("Content-Type: text/plain; charset=UTF-8");

  echo "セッションクッキーパラメータ\n";
  var_export(session_get_cookie_params());

  //セッションを破棄
  $_SESSION = array();
  session_destroy();
?>