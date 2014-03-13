<?php
  $imgfile = "test.jpg";

  $fhandle = @fopen($imgfile, "rb");

  if($fhandle === FALSE) {
    header("Content-Type: text/plain; charset=UTF-8");
    echo "ファイルが開けません";
  }
  else {
    clearstatcache();
    $binary = fread($fhandle, filesize($imgfile));

    header("Content-Type: image/jpeg");
    echo $binary;

    fclose($fhandle);
  }
?>