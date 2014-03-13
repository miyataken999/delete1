<?php
  //グローバル変数
  $first_name = '名前';
  $last_name = '苗字';

  function get_full_name() {
    return $GLOBALS{"last_name"}." ".$GLOBALS{"first_name"};
  }

  header("Content-Type: text/plain; charset=UTF-8");

  echo get_full_name();
?>