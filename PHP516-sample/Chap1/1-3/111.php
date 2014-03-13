<?php
  $base = "This is a pen.";

  header("Content-Type: text/plain; charset=UTF-8");

  echo "strtr関数\n";
  echo "iを大文字に置換した結果 = ".strtr($base, "i", "I")."\n";

  echo "str_replace関数\n";
  echo str_replace("This", "There", $base)."\n";

  echo "str_ireplace関数\n";
  echo str_ireplace("THIS", "There", $base)."\n";

  echo "substr_replace関数\n";
  echo substr_replace($base, "I have", 0, 7)."\n";
?>