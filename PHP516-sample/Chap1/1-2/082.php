<?php
  $csv_text = "名前,住所,電話番号,勤務先,その他";

  header("Content-Type: text/plain; charset=UTF-8");

  $columns = explode(",", $csv_text, 4);

  foreach($columns as $key => $column) {
    echo "[{$key}] => {$column}\n";
  }
?>