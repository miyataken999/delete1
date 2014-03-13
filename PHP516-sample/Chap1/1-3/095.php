<?php
  $string_var = 'PHP Program';

  header("Content-Type: text/plain; charset=UTF-8");

  echo "crypt関数\n";
  if(CRYPT_STD_DES == 1){
    echo "CRYPT_STD_DES = ".crypt($string_var, 'AB')."\n";
  }
  if(CRYPT_EXT_DES == 1){
    echo "CRYPT_EXT_DES = ".crypt($string_var, '_12..5678')."\n";
  }
  if(CRYPT_MD5 == 1){
    echo "CRYPT_MD5 = ".crypt($string_var, '$1$123456789012$')."\n";
  }
  if(CRYPT_BLOWFISH  == 1){
    echo "CRYPT_BLOWFISH = ".crypt($string_var, '$2a$09$1234567890123456789012$')."\n";
  }
  if(CRYPT_SHA256  == 1){
    echo "CRYPT_SHA256 = ".crypt($string_var, '$5$round=1000$1234567890123456$')."\n";
  }
  if(CRYPT_SHA512  == 1){
    echo "CRYPT_SHA512  = ".crypt($string_var, '$6$round=1000$1234567890123456$')."\n";
  }

  echo "md5関数\n";
  echo md5($string_var, false)."\n";

  echo "sha1関数\n";
  echo sha1("test", false)."\n";
?>