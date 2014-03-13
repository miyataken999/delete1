<?php
  $base = "This is a Pen";
  $token_num = 1;

  header("Content-Type: text/plain; charset=UTF-8");

  $token = strtok($base, " ");
  printf("%dつ目のトークン = %s\n", $token_num++, $token);

  while(($token = strtok(" ")) !== FALSE) {
    printf("%dつ目のトークン = %s\n", $token_num++, $token);
  }
?>