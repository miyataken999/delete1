<?php
  header("Content-Type: text/plain; charset=UTF-8");

  echo "include_once文を3回実行する\n";
  //ファイルを3回インクルード
  include_once('029_2.php');
  include_once('029_2.php');
  include_once('029_2.php');
?>