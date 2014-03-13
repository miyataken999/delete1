<?php
  $htmltags = "&lt;script type=&quot;text/javascript&quot;&gt;window.alert(&#039;アラート文言&#039;);&lt;/script&gt;";

  header("Content-Type: text/plain; charset=UTF-8");

  echo "元の文字列 => {$htmltags}\n\n";

  echo "実体参照から元の文字への変換後\n";
  echo html_entity_decode($htmltags, ENT_QUOTES, 'UTF-8');
?>