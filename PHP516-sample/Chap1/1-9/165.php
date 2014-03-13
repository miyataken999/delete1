<?php
   header("Content-Type: text/plain; charset=UTF-8");

   echo "/usr/bin/phpのファイル名 => ".basename("/usr/bin/php")."\n";
   echo "../../usr/bin/phpのファイル名 => ".basename("../../usr/bin/php")."\n";

   //拡張子付きの場合
   echo "dir/group1/sample.txtのファイル名 => ".basename("dir/group1/sample.txt", ".txt")."\n";
   //拡張子が引数と合わない場合
   echo "dir/group1/sample.jpgのファイル名 => ".basename("dir/group1/sample.jpg", ".txt")."\n";
?>