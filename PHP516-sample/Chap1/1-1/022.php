<?php
  $phptype = "object";

  header("Content-Type: text/plain; charset=UTF-8");

  switch ($phptype) {
    case "bool":
    case "int":
    case "float":
    case "string":
      echo "{$phptype}はスカラー型です。";
      break;
    case "array":
    case "object":
      echo "{$phptype}は複合型です。";
      break;
    default:
      echo "{$phptype}は特殊型です。";
  }
?>