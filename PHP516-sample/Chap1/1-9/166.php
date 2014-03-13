<?php
   header("Content-Type: text/plain; charset=UTF-8");

   clearstatcache();
   $stat_array = stat(__FILE__);

   echo "実行中のファイルの情報\n";
   print_r($stat_array);
?>