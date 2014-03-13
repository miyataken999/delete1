<?php
  header("Content-Type: text/plain; charset=UTF-8");

  echo "一意なIDを10個\n";
  for($i=0; $i<10; $i++) {
    echo uniqid("unique_", TRUE)."\n";
  }
?>