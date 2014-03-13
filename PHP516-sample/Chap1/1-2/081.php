<?php
  $columns = array(
    "名前",
    "住所",
    "電話番号",
    "勤務先"
  );

  header("Content-Type: text/plain; charset=UTF-8");

  //CSV形式に変換する
  $csv_text = implode(",", $columns);

  echo "{$csv_text}\n";
?>