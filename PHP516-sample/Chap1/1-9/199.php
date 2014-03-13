<?php
  header("Content-Type: text/plain; charset=UTF-8");

  $filters = stream_get_filters();
  print_r($filters);
?>