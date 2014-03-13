<?php
  $counter=0;
  header("Content-Type: text/plain; charset=UTF-8");

  do {
    echo "do...while文の".(++$counter)."回目の処理\n";
  } while(FALSE); //必ず偽となる条件
?>