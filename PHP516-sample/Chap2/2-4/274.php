<?php
  header("Content-Type: text/plain; charset=UTF-8");

  //初めてのアクセス時にはクッキーは保存されていないため
  //クッキーのデータは取得できません

  setcookie("sample_cookie1", "あいうえお");

  if(isset($_COOKIE["sample_cookie1"])) {
    echo "sample_cookie1の値 => ".$_COOKIE["sample_cookie1"]."\n";
  }
  else {
    echo "sample_cookie1は送信されませんでした。まだ初めてのアクセスか、ブラウザからクッキーを拒否されました。\n";
  }
?>