<?php

require_once __DIR__ . '/../513_3.php';

$steps->Given('/^ログイン画面が表示されている　$/', function($world) {
	$world->loginCheck = new loginCheck();
	$world->loginCheck->init();
});

$steps->And('/^"([^"]*)"に"([^"]*)"と入力する$/', function($world, $arg1, $arg2) {
	$world->loginCheck->inputCheck();
});

$steps->When('/^loginとpasswordの組み合わせが正しい$/', function($world) {
	$world->loginCheck->loginPasswordCheck();
});

$steps->Then('/^"([^"]*)"と表示される$/', function($world, $arg1) {
	$world->loginCheck->loginSuccess();
});

?>