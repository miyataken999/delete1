<?php
  header("Content-Type: text/plain; charset=UTF-8");

  //2012年2月29日は存在しない
  $result = checkdate(2, 29, 2012);
  echo "2012年2月29日は";
  echo ($result === TRUE) ? "正しい" : "正しくない";
  echo "\n";

  //2010年2月29日は存在しない
  $result = checkdate(2, 29, 2010);
  echo "2010年2月29日は";
  echo ($result === TRUE) ? "正しい" : "正しくない";
?>