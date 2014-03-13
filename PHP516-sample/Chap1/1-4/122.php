<?php
  $pattern = "/([a-z]+) ([a-z]+)/i";
  $string_var = "Taro Shuwa,Hanako Shuwa,Jiro Shuwa";

  //名前と苗字を逆転してそれぞれ大文字に変換する関数
  function upper_name($matches) {
    $last_name = strtoupper($matches[2]);
    $first_name = strtoupper($matches[1]);
    return "{$last_name} {$first_name}";
  }

  header("Content-Type: text/plain; charset=UTF-8");

  echo "置換前 = {$string_var}\n\n";

  echo "preg_replace関数\n";
  //名前の苗字と名前を逆に置換する
  $result = preg_replace($pattern, "$2 $1", $string_var, -1, $replace_count);

  echo "置換回数 = {$replace_count}\n";
  echo "置換後 = {$result}\n";
  echo "\n";

  echo "preg_replace_callback関数\n";

  $result = preg_replace_callback($pattern, "upper_name", $string_var, -1, $replace_count);

  echo "置換回数 = {$replace_count}\n";
  echo "置換後 = {$result}\n";
?>