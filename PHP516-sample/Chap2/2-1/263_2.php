<?php
  $htmltags = "<script type=\"text/javascript\">window.alert('アラート文言');</script>";

  header("Content-Type: text/plain; charset=UTF-8");

  echo "2重エンコードをTRUEの場合\n";
  $encoded = htmlspecialchars($htmltags, ENT_QUOTES, 'UTF-8', TRUE);
  echo "1回目のエンコード => {$encoded}\n";
  $encoded = htmlspecialchars($encoded, ENT_QUOTES, 'UTF-8', TRUE);
  echo "2回目のエンコード => {$encoded}\n";


  echo "2重エンコードをFALSEの場合\n";
  $encoded = htmlspecialchars($htmltags, ENT_QUOTES, 'UTF-8', FALSE);
  echo "1回目のエンコード => {$encoded}\n";
  $encoded = htmlspecialchars($encoded, ENT_QUOTES, 'UTF-8', FALSE);
  echo "2回目のエンコード => {$encoded}\n";
?>