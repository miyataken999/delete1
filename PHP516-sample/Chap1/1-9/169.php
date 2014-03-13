<?php
  //このコードはWindowsでは意図した動作をしません

  header("Content-Type: text/plain; charset=UTF-8");

  clearstatcache();
  echo "現在の属性 ".decoct(fileperms(__FILE__))."\n";

  chmod(__FILE__, 0755);

  clearstatcache();
  echo "変更後の属性 ".decoct(fileperms(__FILE__))."\n";
?>