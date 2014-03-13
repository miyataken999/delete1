<?php
  $before_limiter = session_cache_limiter("private");
  $before_expire = session_cache_expire("60");

  //セッション開始
  session_start();

  header("Content-Type: text/plain; charset=UTF-8");

  echo "変更前のキャッシュリミッタ => {$before_limiter}\n";
  echo "変更前のキャッシュ有効期限 => {$before_expire}\n";

  echo "変更後のキャッシュリミッタ => ".session_cache_limiter()."\n";
  echo "変更後のキャッシュ有効期限 => ".session_cache_expire()."\n";

  //セッションを破棄
  $_SESSION = array();
  session_destroy();
?>