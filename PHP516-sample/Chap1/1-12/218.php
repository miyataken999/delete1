<?php
  header("Content-Type: text/plain; charset=UTF-8");

  echo "phpversion => ".phpversion()."\n";
  echo "php_uname => ".php_uname()."\n";
  echo "php_sapi_name => ".php_sapi_name()."\n";
  echo "zend_version => ".zend_version()."\n";
  echo "memory_get_usage => ".memory_get_usage()."\n";
  echo "memory_get_peak_usage => ".memory_get_peak_usage()."\n";
  echo "php_ini_loaded_file => ".php_ini_loaded_file()."\n";
  echo "php_ini_scanned_files => ".php_ini_scanned_files()."\n";
?>