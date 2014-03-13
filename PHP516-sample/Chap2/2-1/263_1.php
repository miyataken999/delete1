<?php
  $htmltags = "<script type=\"text/javascript\">window.alert('アラート文言');</script>";

  header("Content-Type: text/plain; charset=UTF-8");

  echo "元のHTML文字列 => {$htmltags}\n\n";

  echo "htmlspecialchars関数\n";
  echo htmlspecialchars($htmltags);
  echo "\n\n";

  echo "htmlentities関数\n";
  echo htmlentities($htmltags, ENT_QUOTES, 'UTF-8');
  echo "\n\n";
?>