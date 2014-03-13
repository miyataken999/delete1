<?php
  header("Content-Type: text/plain; charset=UTF-8");

  $stream_context = stream_context_create();
  echo "ストリームコンテキストのリソースの型 => ".get_resource_type($stream_context)."\n";

  $fhandle = @fopen(__FILE__, "rb");
  if($fhandle !== FALSE) {
    echo "ファイルハンドルのリソースの型 => ".get_resource_type($fhandle)."\n";
    fclose($fhandle);
  }
?>