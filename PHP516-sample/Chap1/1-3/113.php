<?php
  $mailaddr = "your_name@example.com";
  $domain1 = "example.com";
  $domain2 = "example-domain.com";
  $domain3 = "test.com";

  header("Content-Type: text/plain; charset=UTF-8");

  echo "{$domain1}との比較結果 = ".substr_compare($mailaddr, $domain1, 10)."\n";
  echo "{$domain2}との比較結果 = ".substr_compare($mailaddr, $domain2, 10)."\n";
  echo "{$domain3}との比較結果 = ".substr_compare($mailaddr, $domain3, 10)."\n";
?>