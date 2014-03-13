<?php
define('DBTYPE', 'mysql');
define('DBNAME', 'bookspdo'); // データベース名を指定してください。
define('DBHOST', 'localhost');
define('DBUSER', 'root'); // データベースユーザ名(一般ユーザ)を指定してください。
define('DBPASS', 'mysql'); // パスワードを指定してください。
define('DSN',   DBTYPE . ":dbname=" . DBNAME . ";host=" . DBHOST . ";charset=utf8" );
?>