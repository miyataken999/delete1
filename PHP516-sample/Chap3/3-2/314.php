<?php
header("Content-type: text/html; charset=UTF-8");
echo "<br /><br />■特定の記号をエスケープし、JSON形式に変換する。<br />";
$arr = array("PHP", "Java", "Perl", "<TAG>", "'APOS'", '"QUOT"', "&AMP&");
echo json_encode($arr, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
?>