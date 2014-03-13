<?php
  header("Content-Type: text/plain; charset=UTF-8");

  $user_var = "ユーザが定義した変数";

  echo "定義済み変数名の一覧\n";
  $defined_vars = get_defined_vars();

  foreach($defined_vars as $var_name => $var_value) {
    echo "{$var_name}\n";
  }
?>