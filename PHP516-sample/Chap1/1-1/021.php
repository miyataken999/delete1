<?php
  $age = 25;

  header("Content-Type: text/plain; charset=UTF-8");

  //記述方法1
  if($age < 20) {
    echo "{$age}歳は未成年です。\n";
  }
  elseif($age < 30) {
    echo "{$age}歳は20代です。\n";
  }
  elseif($age < 40) {
    echo "{$age}歳は30代です。\n";
  }
  else {
    echo "{$age}歳は40歳以上です。\n";
  }

  //記述方法2
  if($age < 20):
    echo "{$age}歳は未成年です。\n";
  elseif($age < 30):
    echo "{$age}歳は20代です。\n";
  elseif($age < 30):
    echo "{$age}歳は30代です。\n";
  else:
    echo "{$age}歳は30歳以上です。\n";
  endif;
?>