<?php
  $kansuji_array = array(
    "一" => 1, "二" => 2, "三" => 3, "四" => 4, "五" => 5
  );

  header("Content-Type: text/plain; charset=UTF-8");

  $kansuji = array_search(4, $kansuji_array, TRUE);
  if($kansuji != FALSE) {
    echo "4の漢数字は「{$kansuji}」です。\n";
  }
  else {
    echo "4の漢数字が見つかりません。";
  }
?>