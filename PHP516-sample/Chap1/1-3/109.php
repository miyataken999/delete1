<?php
  $abc = "ABCDEFG";

  header("Content-Type: text/plain; charset=UTF-8");

  echo "逆転前 = {$abc}\n";
  echo "逆転後 = ".strrev($abc)."\n";
?>