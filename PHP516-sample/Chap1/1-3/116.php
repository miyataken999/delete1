<?php
  $rate = 0;

  header("Content-Type: text/plain; charset=UTF-8");

  $match_count = similar_text('apple', 'grape', $rate);
  echo "appleとgrapeの類似性は、{$rate} ％\n";
  echo "appleとgrapeの類似文字数は、{$match_count}文字\n";

  $total_cost = levenshtein('apple', 'grape');
  echo "appleからgrapeへの最小変換文字数は、{$total_cost}文字\n";

?>