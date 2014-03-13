<?php
  $year = 2011;
  $month = 6;
  $day = 23;

  header("Content-Type: text/plain; charset=UTF-8");

  $japanese_format = '日本の日付表記  %1$04d年%2$02d月%3$02d日';
  $american_format = 'アメリカの日付表記 %2$02d/%3$02d/%1$04d';

  echo sprintf($japanese_format, $year, $month, $day), "\n";
  echo sprintf($american_format, $year, $month, $day), "\n";
?>