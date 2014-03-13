<?php
  $data_text = <<<END_OF_DATA
みかん、1230個、30円
りんご、980個、65円
ぶどう、345個、88円
いちご、2800個、30円
END_OF_DATA;

  header("Content-Type: text/plain; charset=UTF-8");

  $fruits = array();

  $result = mb_ereg_search_init($data_text, "^([^、]+)、([^、]+)、([^、]+)$", "mr");

  while(mb_ereg_search()) {
    $matches = mb_ereg_search_getregs();
    //連想配列につめる
    $fruits[] = array('name' => $matches[1], 'stock' => $matches[2], 'price' => $matches[3]);
  }

  print_r($fruits);
?>