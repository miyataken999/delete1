<?php
  header("Content-Type: text/plain; charset=UTF-8");
  $a = 100; //行末までコメントです。画面には表示されません
  $b = 200; #行末までコメントです。画面には表示されません。
  /* 複数行コメント
     ここもコメントです。 */
  echo '$a + $b = '.($a + $b)."\n";
?>