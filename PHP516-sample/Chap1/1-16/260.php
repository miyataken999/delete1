<?php
  header("Content-Type: text/plain; charset=UTF-8");

  //このスクリプトは、ここで3秒遅延させてから処理を継続します
  //つまり、このスクリプトは最低でも3秒以上応答が返りません

  $result = sleep(3);

  echo "スクリプト遅延結果 => ";
  var_dump($result);
?>