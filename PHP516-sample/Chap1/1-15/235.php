<?php
  header("Content-Type: text/plain; charset=UTF-8");

  //タイムゾーンクラスをインスタンス化する
  $timezone = new DateTimeZone("Asia/Tokyo");

  echo "タイムゾーンの名前 => ".$timezone->getName()."\n";
?>