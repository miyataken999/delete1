<?php
header("Content-type: text/html; charset=UTF-8");
echo "■エラーコードを取得する<br />";
$json = '["PHP","Java","Perl""]';
$decode = json_decode($json);
switch (json_last_error()) {
  case JSON_ERROR_NONE:
      echo 'エラーはありませんでした。';
  break;
  case JSON_ERROR_DEPTH:
      echo 'スタックの深さが最大値をこえました。';
  break;
  case JSON_ERROR_STATE_MISMATCH:
      echo '無効なJSON形式です。';
  break;
  case JSON_ERROR_CTRL_CHAR:
      echo '制御文字エラーです。';
  break;
  case JSON_ERROR_SYNTAX:
      echo '構文エラーです。';
  break;
  case JSON_ERROR_UTF8:
      echo 'UTF8として不正です。';
  break;
  default:
      echo 'その他のエラー';
  break;
}
?>