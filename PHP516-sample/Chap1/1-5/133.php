<?php
  $string_var = "PHPではﾏﾙﾁﾊﾞｲﾄ文字列を任意の文字幅に切り詰めることができます。";

  header("Content-Type: text/plain; charset=UTF-8");

  echo mb_strimwidth($string_var, 0, 30, "...");
?>