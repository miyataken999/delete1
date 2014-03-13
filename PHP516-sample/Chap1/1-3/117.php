<?php
  header("Content-Type: text/plain; charset=UTF-8");

  $soundexkey = soundex('allow');
  echo "allowのsoundexキー = {$soundexkey}\n";
  $soundexkey = soundex('arrow');
  echo "arrowのsoundexキー = {$soundexkey}\n";

  $metaphonekey = metaphone('allow');
  echo "allowのmetaphoneキー = {$metaphonekey}\n";
  $metaphonekey = metaphone('arrow');
  echo "arrowのmetaphoneキー = {$metaphonekey}\n";

?>