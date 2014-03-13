<?php
  //GDモジュールファイルの場所（パスはサンプル）
  $gd_module_path = "/etc/httpd/modules/gd.so";

  header("Content-Type: text/plain; charset=UTF-8");

  if(extension_loaded("gd")) {
    echo "gdモジュールは、すでにロード済みです\n";
  }
  else {
    if(dl($gd_module_path)) {
      echo "gdモジュールのロードに成功しました\n";
    }
    else {
      echo "gdモジュールのロードに失敗しました\n";
    }
  }
?>