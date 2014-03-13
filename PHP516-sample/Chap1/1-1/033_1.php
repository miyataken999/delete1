<?php
  //グローバル変数
  $first_name = '名前';
  $last_name = '苗字';

  function get_full_name() {
    global $first_name, $last_name;
    return "{$last_name} {$first_name}";
  }

  header("Content-Type: text/plain; charset=UTF-8");

  echo get_full_name();
?>