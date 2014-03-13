<?php
  $htmltags = <<<END_OF_HTML
<h2>タイトル</h2>
<p>ここは段組みのテキストです。</p>
END_OF_HTML;

  header("Content-Type: text/plain; charset=UTF-8");

  echo "元のHTML文字列\n";
  echo $htmltags;
  echo "\n\n";

  echo "タグを全て取り除いた文字列\n";
  echo strip_tags($htmltags);
  echo "\n\n";

  echo "pタグ以外のタグを取り除いた文字列\n";
  echo strip_tags($htmltags, "<p>");
?>