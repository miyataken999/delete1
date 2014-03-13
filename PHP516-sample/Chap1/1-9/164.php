<?php
   header("Content-Type: text/plain; charset=UTF-8");

   echo "/usr/bin/phpの親ディレクトリ => ".dirname("/usr/bin/php")."\n";
   echo "../../usr/bin/phpの親ディレクトリ => ".dirname("../../usr/bin/php")."\n";
?>