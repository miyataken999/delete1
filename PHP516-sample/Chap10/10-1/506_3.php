<?php

$a = 1;
$b = 10;

$c = $a + $b;

assertTrue($c == 11);

function assertTrue($condition) {

	if (!$condition) {
		throw new Exception('エラーです！');
	}
}
?>