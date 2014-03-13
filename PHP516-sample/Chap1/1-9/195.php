<?php
  header("Content-Type: text/plain; charset=UTF-8");

  $filenames = array("test.txt", ".htaccess", "sample.php", "0123", "abcdefg.php4");

  foreach($filenames as $key => $file) {
    if(fnmatch("*.php", $file)) {
      echo "[match] {$file}\n";
    }
  }
?>