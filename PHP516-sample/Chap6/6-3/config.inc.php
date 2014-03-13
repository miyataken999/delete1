<?php
define("CONFIG_DIR", "C:/xampp174/htdocs/books.example.com/books_orm/build/conf"); // Propelが自動生成したconfディレクトリの場所を指定してください
define("CLASSES_DIR", "C:/xampp174/htdocs/books.example.com/books_orm/build/classes"); // Propelが自動生成したclassesディレクトリの場所を指定してください
define("PROPEL_DIR", "C:/xampp174/htdocs/books.example.com/vendors/propel/runtime/lib"); // Propelのlibディレクトリの場所を指定してください

set_include_path(CLASSES_DIR . PATH_SEPARATOR . get_include_path());
set_include_path(PROPEL_DIR . PATH_SEPARATOR . get_include_path());

require_once 'Propel.php';
Propel::init(CONFIG_DIR."/books-conf.php");
?>