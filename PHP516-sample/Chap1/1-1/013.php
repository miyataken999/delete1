<?php
  $x = 123;
  $y = "123";

  header("Content-Type: text/plain; charset=UTF-8");

  if($x == $y) {
    echo "\$x == \$yは真である\n";
  }
  else {
    echo "\$x == \$yは偽である\n";
  }

  if($x === $y) {
    echo "\$x === \$yは真である\n";
  }
  else {
    echo "\$x === \$yは偽である\n";
  }

?>